<x-dashboard.layouts.main>

    @section('title', 'كافينو  | ایجاد سرویس')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />
                    

                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ایجاد دسته بندی جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.services.store') }}" method="post">
                            @csrf

                            <div class="card-body">

                                <div class="form-group mb-8">
                                    <div class="alert alert-custom alert-default" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                        <div class="alert-text">
                                            فرم مثال زیر عناصر فرم جی اس معمول را نشان می دهد که از کلاس های اضافی سبک های
                                            به روز شده را از بوت استرپ دریافت می کنند.
                                        </div>
                                    </div>
                                </div>

                                <x-dashboard.partials.error />



                                <div class="form-group">
                                    <label>عنوان سروس</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
                                    <span class="form-text text-muted">لطفا عنوان را کاملا توصیفی وارد کنید</span>
                                </div>

                                <div class="form-group mb-1">
                                    <label for="description">توضیحات سرویس</label>
                                    <textarea class="form-control" rows="3" name="description">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>قیمت سرویس</label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}"/>
                                </div>

                                <div class="form-group">
                                    <label for="category">دسته بندی</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-big btn-primary mr-2">ایجاد</button>
                                <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
