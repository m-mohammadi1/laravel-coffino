<?php

namespace App\Http\Controllers\Dashboard;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
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
        $count->services()->detach();
        $count->delete();

        return back()->with('successMessage', 'عمليات حذف با موفقيت انجام شد');
    }
}
