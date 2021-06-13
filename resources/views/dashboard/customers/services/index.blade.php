<x-dashboard.layouts.main>

    @section('title', 'كافينو | ایجاد سرویس')


    @section('headers')

        <meta name="csrf-token" content="{{ csrf_token() }}">

    @endsection

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                درخواست سرویس
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.costumers.services.store') }}" method="post">
                            @csrf

                            <div class="card-body">

                                <x-dashboard.partials.error />


                                <div class="form-group mb-1">
                                    <label for="description">توضیحات درخواست</label>
                                    <textarea class="form-control" rows="3"
                                        name="description">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>تعداد سرویس</label>
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}" />
                                </div>

                                <div class="form-group">
                                    <label for="category">دسته بندی</label>
                                    <select class="form-control" id="category-select" name="category_id">
                                            <option value="">انتخاب کنید</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category">سرویس</label>
                                    <select class="form-control" id="service-select" name="service_id">

                                        {{--  <option value="0">دسته بندی را انتخاب کنید</option>  --}}

                                    </select>
                                </div>

                            </div>
                            <div class="card-footer d-flex justify-content-between">

                                <button type="submit" class="btn btn-big btn-primary mr-2">ثبت درخواست و پرداخت</button>

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
            $("#category-select").on("change", function() {
                const category = $(this).val();
                const serviceSelect = $("#service-select");


                // disable the services select
                serviceSelect.attr("disabled", 'disabled');

                // romove last options (services)
                $("#service-select option").each(function() {
                    $(this).remove();
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });

                let categoryInfo = {
                    'cat_id': category
                }


                $.ajax({
                    method: 'POST',
                    url: "{{ route('dashboard.customers.services.get_by_cat') }}",
                    data: categoryInfo,
                    dataType: 'json',
                    success: function(response) {
                        const services = response.data;
                        const servicesExsits = services.length;

                        if (!servicesExsits) {
                            

                            $('#service-select').append('<option>هیچ سرویسی با دسته بندی مورد نظر پیدا نشد</option>');

                        } else {

                            serviceSelect.removeAttr("disabled");


                            for (let i = 0; i < services.length; i++) {
                                let service = services[i];
                                console.log(service.id);
                                $('#service-select').append('<option value="' + service.id + '">' +
                                    service.title + '</option>');

                            }
                        }



                    },
                    error: function(data) {
                        //console.log(data);
                        console.log('error');

                    }


                });

            });

        </script>



    @endsection

</x-dashboard.layouts.main>
