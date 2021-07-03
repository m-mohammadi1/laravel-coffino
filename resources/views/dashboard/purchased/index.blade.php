<x-dashboard.layouts.main>

    @section('title', 'كافينو | تراکنش های کاربر')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <x-dashboard.partials.messages.success/>
                    <x-dashboard.partials.messages.error/>


                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">
                                    مدیریت سرویس های درخواستی کاربران
                                </h3>
                            </div>

                        </div>
                        <div class="card-body">
                            <!--begin: جستجو Form-->
                            <!--begin::جستجو Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control search-input"
                                                           placeholder="جستجو..."
                                                           id="kt_datatable_search_query">
                                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">براساس:</label>
                                                    <div class="dropdown bootstrap-select form-control"><select
                                                            class="form-control search-column-select"
                                                            id="kt_datatable_search_type">
                                                            @foreach ($filter_items as $column => $name)
                                                                <option value="{{ $column }}">{{ $name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-2"
                                                                 tabindex="-1">
                                                                <ul class="dropdown-menu inner show"
                                                                    role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">وضعیت:</label>
                                                    <div class="dropdown bootstrap-select form-control"><select
                                                            class="form-control search-status-select"
                                                            id="kt_datatable_search_status">
                                                            <option value="">همه</option>
                                                            @foreach ($statuses as $code => $status_text)
                                                                <option value="{{ $code }}">{{ $status_text }}</option>
                                                            @endforeach
                                                        </select>

                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-1"
                                                                 tabindex="-1">
                                                                <ul class="dropdown-menu inner show"
                                                                    role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="javascript:;"
                                           class="btn btn-light-primary px-6 font-weight-bold search-link">
                                            اعمال و جستجو
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <form data-action="{{ route('dashboard.purchases.index') }}" action=""
                                  id="search-from"></form>

                            <!--end::جستجو Form-->
                            <!--end: جستجو Form-->

                            <!--begin: جدول داده ها-->
                            <div
                                class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block; overflow: auto;">
                                    <thead class="datatable-head">
                                    <tr class="datatable-row" style="left: 0px;">
                                        <th data-field="ID" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">آیدی دیتابیس</span>
                                        </th>

                                        <th data-field="service" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">کاربر درخواستی</span>
                                        </th>

                                        <th data-field="service" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">سرویس درخواستی</span>
                                        </th>

                                        <th data-field="count" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">تعداد درخواست شده</span>
                                        </th>

                                        <th data-field="status" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">وضعیت موجود</span>
                                        </th>


                                        <th data-field="date" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">
                                                    عملیات
                                                </span>
                                        </th>


                                    </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                    @php($i = 0)
                                    @foreach ($purchased_services as $service)
                                        <tr id="{{ $service->id }}" data-row="{{ $i }}" class="datatable-row"
                                            style="left: 0px;">
                                            <td class="datatable-cell">
                                                <span style="width: 137px;"
                                                      id="transaction-id">{{ $service->id }}</span>
                                            </td>

                                            <td class="datatable-cell">
                                                <span style="width: 137px;"
                                                      id="transaction-id">{{ $service->user->email }}</span>
                                            </td>


                                            <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                <span style="width: 137px;">{{ $service->service->title }}</span>
                                            </td>

                                            <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                <span style="width: 137px;">{{ $service->service_count }}</span>
                                            </td>


                                            <td aria-label="0363-0198" class="datatable-cell status-cell">
                                                        <span style="width: 137px;">
                                                            {{ $service->getStatusText() }}
                                                        </span>
                                            </td>

                                            @can('edit purchased_service')
                                                <td data-field="Actions" aria-label="0363-0198" class="datatable-cell">
                                                            <span style="width: 137px;">
                                                                <button type="button" class="btn btn-info data-show"
                                                                        data-action="{{ route('dashboard.purchases.show', $service->id) }}"
                                                                        data-method="GET"
                                                                >مشاهده و ویرایش</button>
                                                            </span>
                                                </td>
                                            @endcan

                                        </tr>
                                        @php($i++)
                                    @endforeach


                                    </tbody>
                                </table>

                                <div class="datatable-pager datatable-paging-loaded">


                                    <div class="datatable-pager-info">

                                        {{ $purchased_services->links() }}

                                    </div>
                                </div>
                            </div>
                            <!--end: جدول داده ها-->
                        </div>
                    </div>

                </div>

            </div>

        </div>



        <!-- مودال-->
        <div class="modal fade" id="purchasedDetailsModal" data-backdrop="static" tabindex="-1" role="dialog"
             aria-labelledby="none" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اطلاعات سرویس پرداخت شده</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>

                    <form id="updatePurchasedForm" action="" method="post">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div data-scroll="true" data-height="500">

                                <div class="form-group">
                                    <label>کاربر ثبت کرده</label>
                                    <input type="text" id="service-user" class="form-control transaction-modal-input"
                                           disabled="disabled" value="">
                                </div>

                                <div class="form-group">
                                    <label>سیرویس درخواستی</label>
                                    <input type="text" id="service-service" class="form-control transaction-modal-input"
                                           disabled="disabled" value="">
                                </div>

                                <div class="form-group">
                                    <label>تعداد درخواستی</label>
                                    <input type="text" id="service-count" class="form-control transaction-modal-input"
                                           disabled="disabled" value="">
                                </div>

                                <div class="form-group">
                                    <label>لینک سیرویس درخواستی</label>
                                    <input type="text" id="service-service-link"
                                           class="form-control transaction-modal-input"
                                           disabled="disabled" value="">
                                </div>

                                <div class="form-group">
                                    <label>تاریخ ثبت</label>
                                    <input type="text" id="service-date" class="form-control transaction-modal-input"
                                           disabled="disabled" value="">
                                </div>


                                <div class="form-group">
                                    <label>وضعیت</label>
                                    <select name="status" class="form-control" id="service-status" data-id=""
                                            data-action="-1">

                                        @foreach(App\Models\PurchasedService::getStatusArray() as $status)
                                            <option value="{{ $status['code'] }}">
                                                {{ $status['text'] }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">لغو
                                </button>
                                <button type="submit" id="savePurchased"
                                        class="btn btn-danger font-weight-bold">ذخیره
                                </button>
                            </div>
                    </form>


                </div>


            </div>
        </div>
        </div>







    @endsection




    @section('scripts')
        @can('edit purchased_service')
            <script>
                $(document).ready(function () {
                    const updatePurchasedForm = $("#updatePurchasedForm");
                    const modal = $("#purchasedDetailsModal");


                    $(".data-show").click(function () {

                        const button = $(this);

                        const user = $("#service-user");
                        const service = $("#service-service");
                        const count = $("#service-count");
                        const status = $("#service-status");
                        const date = $("#service-date");
                        const link = $("#service-service-link");


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr(
                                    'content')
                            }
                        });

                        console.log(button.attr('data-action'));
                        $.ajax({
                            method: button.attr('data-method'),
                            url: button.attr('data-action'),
                            dataType: 'json',
                            success: function (response) {

                                const purchased_service = response.data;

                                // set values of inputs fron response
                                user.val(purchased_service.user.name);
                                service.val(purchased_service.service.title);
                                count.val(purchased_service.service_count);
                                status.val(purchased_service.status);
                                date.val(purchased_service.created_at);
                                link.val(purchased_service.service_link);

                                modal.modal('show');
                                // set action of updating status
                                // status.attr('data-action', response.update_route);
                                updatePurchasedForm.attr('action', response.update_route);

                            },
                            error: function (data) {
                                //console.log(data);

                                console.log('error');
                                toastr['error']('مشکلی پیش آمده است');
                            }

                        });


                    });

                    $("#savePurchased").click(function (e) {
                        e.preventDefault();

                        const dropdown = $(this);
                        const action = dropdown.attr('data-action');
                        const selectedStatusId = $('#status').find(":selected").val();


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr(
                                    'content')
                            }
                        });

                        $.ajax({
                            method: updatePurchasedForm.attr('method'),
                            url: updatePurchasedForm.attr('action'),
                            dataType: 'json',
                            data: updatePurchasedForm.serialize(),
                            success: function (response) {

                                modal.modal('hide');

                                if (response.status === 'success') {
                                    toastr["success"](response.message);
                                } else {
                                    toastr["error"](response.message);
                                }

                                const statusTdToUpdate = $('tr#' + response.data.service_id + " .status-cell span");

                                console.log(response);

                                statusTdToUpdate.html(response.data.status_text);

                            },
                            error: function (data) {
                                modal.modal('hide');

                                //console.log(data);
                                toastr["error"]('خطایی رخ داده است لطفا صفحه را رفرش کرده و دوباره امتحان کنید');
                            }


                        });


                    });


                    const searchInput = $(".search-input");
                    const searchColumnSelect = $(".search-column-select")
                    const searchStatusSelect = $(".search-status-select")
                    const searchLink = $(".search-link");
                    const searchForm = $("#search-from");
                    const searchAction = searchForm.attr('data-action');

                    searchLink.click(function () {
                        const data = {
                            searchText: searchInput.val(),
                            status: searchStatusSelect.find(":selected").val(),
                            column: searchColumnSelect.find(":selected").val(),
                        };
                        let link = searchAction + '?sort=' + data.column + '&filter[' + data.column + ']=' + data.searchText + '&filter[status]=' + data.status;
                        // console.log(link);
                        window.location.replace(link);
                    });

                });
            </script>
        @endcan


    <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
        <!--end::Page Scripts-->
    @endsection

</x-dashboard.layouts.main>
