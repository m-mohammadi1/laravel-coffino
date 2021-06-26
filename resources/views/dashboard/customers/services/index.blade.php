<x-dashboard.layouts.main>

    @section('title', 'كافينو | خرید سرویس')

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
                        <form action="{{ route('dashboard.customers.services.purchase') }}" method="post">
                            @csrf

                            <div class="card-body">

                                <x-dashboard.partials.error />



                                <div class="form-group">
                                    <label>لینک مورد نظر برای اعمال سرویس</label>
                                    <input style="text-align: left; direction: rtl;" type="text" class="form-control" name="link" />
                                </div>

                                <div class="form-group">
                                    <label for="category">دسته بندی</label>
                                    <select class="form-control" id="category-select" name="category" data-action="{{ route('dashboard.customers.services.get_by_cat') }}" data-method="POST">
                                            <option value="">انتخاب کنید</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="category">سرویس</label>
                                    <select class="form-control" id="service-select" name="service" disabled="disabled" data-action="{{ route('dashboard.customers.services.count') }}" data-method="POST">

                                        <option>دسته بندی را انتخاب کنید</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="service_count">تعداد</label>
                                    <select class="form-control" id="count-select" name="count" disabled="disabled">

                                        <option value="-1">سرویس را انتخاب کنید</option>

                                    </select>
                                </div>

                                <div class="form-group" id="countInput" style="display: none;">
                                    <label>تعداد سرویس(تعداد دلخواه)</label>
                                    <input type="number" class="form-control" name="optional_count" />
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
            const optionalCountInput = $("#countInput");

            $("#category-select").on("change", function() {
                const categorySelect = $(this);
                const category = $(this).val();
                const serviceSelect = $("#service-select");


                // disable the services select
                // $('#service-select').append('<option>در حال جستجو</option>');
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
                    method: categorySelect.attr('data-method'),
                    url: categorySelect.attr('data-action'),
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

            $("#service-select").on("change", function () {
                const serviceSelect = $(this);
                const service = $(this).val();
                const countSelect = $('#count-select');

                countSelect.attr("disabled", 'disabled');
                // disapear count input
                optionalCountInput.fadeOut(300);

                $("#count-select option").each(function() {
                    $(this).remove();
                });

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });

                let serviceInfo = {
                    'service_id': service
                }

                $.ajax({
                    method: serviceSelect.attr('data-method'),
                    url: serviceSelect.attr('data-action'),
                    data: serviceInfo,
                    dataType: 'json',
                    success: function(response) {
                        const counts = response.data;
                        const status = response.status;

                        if (status === 'found') {

                            countSelect.removeAttr("disabled");

                            for (let i = 0; i < counts.length; i++) {
                                let count = counts[i];
                                let value = parseInt(count.service_count) + parseInt(count.gift_count);
                                let text = 'تعداد ' + count.service_count + ' + هدیه ' + count.gift_count + ' عدد';
                                countSelect.append('<option value="' + value + '">' + text + '</option>');
                            }

                        } else {
                            countSelect.append('<option>هیچ تعدای برای این سرویس ثبت نشده لطفا به صورت دستی انتخاب کنید</option>');

                            optionalCountInput.fadeIn(500);

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
