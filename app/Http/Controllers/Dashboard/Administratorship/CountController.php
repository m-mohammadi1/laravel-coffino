<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Models\Count;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountRequest;
use App\Models\Service;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CountController extends Controller
{
    public function index()
    {
        $this->authorize('manage', Count::class);

        $counts = $this->getCountsPaginated();
        $filter_items = Count::FILTER_ITEMS;

        return view('dashboard.counts.index', compact('counts', 'filter_items'));
    }

    public function create()
    {
        $this->authorize('create', Count::class);

        return view('dashboard.counts.create');
    }

    public function store(StoreCountRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('create', Count::class);

        if (!Count::canCreateMore()) {
            return back()->with('toastr_warning', 'تعداد رکورد ثبت شده به حداکثر خود رسیده است');
        }

        $this->createCount($request);

        return redirect()->route('dashboard.counts.index')->with('toastr_success', 'تعداد سرويس با موفقيت ایجاد شد');
    }


    public function edit(Count $count)
    {
        $this->authorize('see', $count);

        $services = $this->getServicesPaginated($count);

        return view('dashboard.counts.edit', compact('count', 'services'));
    }

    public function update(StoreCountRequest $request, Count $count): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('edit', $count);

        $this->deleteCount($count, $request);

        return redirect()->route('dashboard.counts.index')->with('toastr_success', 'تعداد سرويس با موفقيت ويرايش شد');
    }


    public function destroy(Count $count): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('delete', $count);

        $this->deleteCountAndDetachService($count);

        return back()->with('toastr_success', 'عمليات حذف با موفقيت انجام شد');
    }


    private function deleteCountAndDetachService(Count $count): void
    {
        $count->services()->detach();
        $count->delete();
    }


    private function deleteCount(Count $count, $request): void
    {
        $count->update($request->validated());
    }

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
        return QueryBuilder::for(Count::class)
            ->allowedFilters(array_merge(
                array_keys(Count::FILTER_ITEMS), [AllowedFilter::exact('id'), AllowedFilter::exact('service_count'), AllowedFilter::exact('gift_count')]
            ))
            ->allowedSorts(array_keys(Count::FILTER_ITEMS))
            ->paginate(10)
            ->appends(request()->query());
    }

}
