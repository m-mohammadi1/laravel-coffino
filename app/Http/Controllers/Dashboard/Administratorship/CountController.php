<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Models\Count;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountRequest;
use App\Models\Service;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage', Count::class);
        
        $counts = Count::paginate(10);
        return view('dashboard.counts.index', compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Count::class);

        return view('dashboard.counts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountRequest $request)
    {
        $this->authorize('create', Count::class);

        Count::create($request->validated());
        
        return redirect()->route('dashboard.counts.index')->with('successMessage', 'تعداد سرويس با موفقيت ایجاد شد');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
        $this->authorize('see', $count);

        $services = $count->services()->paginate(5);
        return view('dashboard.counts.edit', compact('count', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCountRequest $request, Count $count)
    {
        $this->authorize('edit', $count);

        $count->update($request->validated());
        return redirect()->route('dashboard.counts.index')->with('successMessage', 'تعداد سرويس با موفقيت ويرايش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Count $count)
    {
        $this->authorize('delete', $count);

        $count->services()->detach();
        $count->delete();

        return back()->with('successMessage', 'عمليات حذف با موفقيت انجام شد');
    }
}