<x-dashboard.layouts.main>

    @section('title', 'كافينو  | ایجاد سرویس')


    @section('headers')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endsection

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success/>
                    <x-dashboard.partials.messages.error/>


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ایجاد دسته بندی جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.services.store') }}" method="post" data-select2-id="40">
                            @csrf

                            <div class="card-body" data-select2-id="39">

                                <x-dashboard.partials.error/>

                                <div class="form-group">
                                    <label>عنوان سروس</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
                                    <span class="form-text text-muted">لطفا عنوان را کاملا توصیفی وارد کنید</span>
                                </div>

                                <div class="form-group mb-1">
                                    <label for="description">توضیحات سرویس</label>
                                    <textarea class="form-control" rows="3"
                                              name="description">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>قیمت سرویس</label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}"/>
                                </div>

                                <div class="form-group">
                                    <label>تعداد قابل انتخاب</label>
                                    <select class="js-example-basic-multiple  form-control" name="counts[]"
                                            multiple="multiple">
                                        @foreach ($counts as $count)
                                            <option
                                                value="{{ $count->id }}">{{ 'تعداد ' . $count->service_count . ' + ' . $count->gift_count . ' هدیه'}}</option>
                                        @endforeach
                                    </select>
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
                                @can('create service')
                                    <button type="submit" class="btn btn-big btn-primary mr-2">ایجاد</button>
                                @else
                                    <button type="button" class="btn btn-big btn-primary mr-2 disabled">ایجاد</button>
                                @endcan
                                <a href="{{ route('dashboard.services.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection

    @section('scripts')
        <script>
            $(document).ready(function () {
                $('.js-example-basic-multiple').select2();
            });
        </script>

        {{--                <script src="{{ asset('assets/js/pages/crud/forms/widgets/select2.js?v=7.0.6') }}"></script>--}}

    @endsection


</x-dashboard.layouts.main>
