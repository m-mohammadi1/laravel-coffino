<x-dashboard.layouts.main>

    @section('title', 'كافينو  | افزودن سوال متداول')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success/>
                    <x-dashboard.partials.messages.error/>


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ایجاد سوال جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.faqs.store') }}" method="post">
                            @csrf

                            <div class="card-body">


                                <x-dashboard.partials.error/>


                                <div class="form-group">
                                    <label>عنوان سوال</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
                                </div>

                                <div class="form-group">
                                    <label>توضیحات</label>

                                    <textarea class="summernote" id="summernote" name="description">{{ old('description') }}</textarea>
                                </div>






                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                @can('create service')
                                    <button type="submit" class="btn btn-big btn-primary mr-2">ایجاد</button>
                                @else
                                    <button type="button" class="btn btn-big btn-primary mr-2 disabled">ایجاد</button>
                                @endcan
                                <a href="{{ route('dashboard.counts.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection

    @section('scripts')
        <script src="{{ asset('assets/js/pages/crud/forms/editors/summernote.js?v=7.0.6') }}"></script>
    @endsection


</x-dashboard.layouts.main>
