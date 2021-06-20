<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Models\Count;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountRequest;
use App\Models\Service;
use Illuminate\Http\Response;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $this->authorize('manage', Count::class);

        $counts = $this->getCountsPaginated();

        return view('dashboard.counts.index', compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create()
    {
        $this->authorize('create', Count::class);

        return view('dashboard.counts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCountRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(StoreCountRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('create', Count::class);

        if (!Count::canCreateMore()) {
            return back()->with('toastr_warning', 'تعداد رکورد ثبت شده به حداکثر خود رسیده است');
        }

        $this->createCount($request);

        return redirect()->route('dashboard.counts.index')->with('toastr_success', 'تعداد سرويس با موفقيت ایجاد شد');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Count $count
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Count $count)
    {
        $this->authorize('see', $count);

        $services = $this->getServicesPaginated($count);

        return view('dashboard.counts.edit', compact('count', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreCountRequest $request
     * @param Count $count
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(StoreCountRequest $request, Count $count): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('edit', $count);

        $this->deleteCount($count, $request);

        return redirect()->route('dashboard.counts.index')->with('toastr_success', 'تعداد سرويس با موفقيت ويرايش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Count $count
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Count $count): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('delete', $count);

        $this->deleteCountAndDetachService($count);

        return back()->with('toastr_success', 'عمليات حذف با موفقيت انجام شد');
    }

    /**
     * @param Count $count
     */
    private function deleteCountAndDetachService(Count $count): void
    {
        $count->services()->detach();
        $count->delete();
    }

    /**
     * @param Count $count
     * @param $request
     */
    private function deleteCount(Count $count, $request): void
    {
        $count->update($request->validated());
    }

    /**
     * @param Count $count
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    private function getServicesPaginated(Count $count): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $count->services()->paginate(5);
    }


    private function createCount($request)
    {
        Count::create($request->validated());
    }

    private function getCountsPaginated()
    {
        return Count::paginate(10);
    }
}
