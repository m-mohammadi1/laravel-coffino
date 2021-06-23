<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;


class CategoryController extends Controller
{
    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('manage', Category::class);

        $categories = Category::paginate(10);

        return view('dashboard.categories.index', compact('categories', 'dataTableInformation'));
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', Category::class);

        return view('dashboard.categories.create');
    }


    /**
     * @param StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(StoreCategoryRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('create', Category::class);

        $this->sotreCat($request->validated());

        return redirect()->route('dashboard.categories.index')->with('successMessage', 'دسته بندی با موفقیت ایجاد شد');
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Category $category)
    {
        $this->authorize('see', $category);

        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * @param StoreCategoryRequest $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(StoreCategoryRequest $request, Category $category): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('edit', $category);

        $this->updateCat($category, $request);


        return redirect()->route('dashboard.categories.index')->with('successMessage', 'دسته بندي با عنوان ' . $category->title . ' با موفقيت بروزرساني شد.');
    }

    /**
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        $catId = $category->id;

        $this->deleteCat($category);

        return back()->with('successMessage', 'دسته بندي با آيدي ' . $catId . ' با موفقيت حذف شد');
    }


    private function sotreCat($values): void
    {
        Category::create($values);
    }


    /**
     * @param $category
     */
    private function deleteCat($category): void
    {
            $category->delete();
    }

    /**
     * @param Category $category
     * @param StoreCategoryRequest $request
     */
    private function updateCat(Category $category, StoreCategoryRequest $request): void
    {
        $category->update($request->validated());
    }
}

