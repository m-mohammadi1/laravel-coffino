<x-dashboard.layouts.main>

    @section('title', 'كافينو  | ويرايش دسته بندي')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ويرايش دسته بندی
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.categories.update', $category) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="card-body">

                                <x-dashboard.partials.error />

                                <div class="form-group">
                                    <label>عنوان دسته بندی</label>
                                    <input type="text" class="form-control" name="title" value="{{ $category->title }}"/>
                                    <span class="form-text text-muted">لطفا عنوان را کاملا توصیفی وارد کنید</span>
                                </div>


                                <div class="form-group mb-1">
                                    <label for="description">توضیحات دسته بندی</label>
                                    <textarea class="form-control" rows="3" name="description">{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-big btn-info mr-2">بروزرساني</button>
                                <a href="{{ route('dashboard.categories.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
