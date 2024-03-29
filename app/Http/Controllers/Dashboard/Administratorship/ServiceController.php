<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Models\Count;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ServiceController extends Controller
{


    public function index()
    {
        $this->authorize('manage', Service::class);

        $services = $this->getServicesPaginated();
        $filter_items = Service::FILTER_ITEMS;

        return view('dashboard.services.index', compact('services', 'filter_items'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', Service::class);

        $categories = $this->getCategories();
        $counts = Count::all();
        return view('dashboard.services.create', compact('categories', 'counts'));
    }


    public function store(StoreServiceRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('create', Service::class);

        $category = $this->findServiceByCatId($request);

        if (!$category) {
            return redirect()->route('dashboard.services.create')->with('errorMessage', 'دسته بندی انتخابی یافت نشد');
        }

        $service = $category->services()->create($request->validated());
        if ($service && $request->has('counts')) {
            $service->counts()->attach(array_values($request->counts));
        }

        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با موفقیت ایجاد شد');
    }


    /**
     * @param Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Service $service)
    {
        $this->authorize('see', $service);

        $categories = $this->getCategories();
        $counts = Count::all();

        $service->load('counts', 'category');
        return view('dashboard.services.edit', compact('categories', 'service', 'counts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreServiceRequest $request
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(StoreServiceRequest $request, Service $service): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('edit', $service);

        $category = $this->findServiceByCatId($request);

        if (!$category) {
            return redirect()->route('dashboard.services.edit')->with('errorMessage', 'دسته بندی انتخابی یافت نشد');
        }

        $this->updateServiceAndSyncIt($service, $request, $category);
        if ($service && $request->has('counts')) {
            $service->counts()->sync(array_values($request->counts));
        }

        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با موفقیت بروزرسانی شد');
    }

    /**
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Service $service): \Illuminate\Http\RedirectResponse
    {

        $this->authorize('delete', $service);

        $serviceTitle = $service->title;
        $this->deleteService($service);

        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با عنوان (' . Str::substr($serviceTitle, 0, 60) . '...) با موفقيت حذف شد.');
    }

    private function findServiceByCatId($request)
    {
        return Category::find($request->category_id);
    }

    private function updateServiceAndSyncIt(Service $service, $request, $category)
    {
        $service->update($request->validated());
        $category->services()->save($service);
    }

    private function getServicesPaginated()
    {
        $services = QueryBuilder::for(Service::class)
            ->allowedFilters(array_merge(
                array_keys(Service::FILTER_ITEMS), [AllowedFilter::exact('id')]
            ))
            ->allowedSorts(array_keys(Service::FILTER_ITEMS))
            ->paginate(10)
            ->appends(request()->query());

        return $services;
    }

    private function getCategories()
    {
        return Category::all();
    }

    private function deleteService(Service $service): void
    {
        $service->delete();
    }
}
