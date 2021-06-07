<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manage', Service::class);
        
        $services = Service::with('category')->paginate(10);
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Service::class);

        $categories = Category::all();
        return view('dashboard.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $this->authorize('create', Service::class);

        $category = Category::find($request->category_id);

        if (!$category)
            return redirect()->route('dashboard.services.create')->with('errorMessage', 'دسته بندی انتخابی یافت نشد');
        
        $category->services()->create($request->validated());

        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با موفقیت ایجاد شد');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $this->authorize('see', $service);

        $categories = Category::all();

        return view('dashboard.services.edit', compact('categories', 'service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServiceRequest $request, Service $service)
    {
        $this->authorize('edit', $service);

        $category = Category::find($request->category_id);

        if (!$category)
            return redirect()->route('dashboard.services.edit')->with('errorMessage', 'دسته بندی انتخابی یافت نشد');
        
        $service->update($request->validated());
        $category->services()->save($service);

        
        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با موفقیت بروزرسانی شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);

        $serviceTitle = $service->title;
        $service->delete();

        return redirect()->route('dashboard.services.index')->with('successMessage', 'سرویس با عنوان (' . Str::substr($serviceTitle, 0, 60) . '...) با موفقيت حذف شد.');
    }
}
