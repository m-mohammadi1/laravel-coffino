<x-dashboard.layouts.main>

    @section('title', 'كافينو | تراکنش های کاربر')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />


                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">
                                    مدیریت تراکنش های کاربران
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
                                                    <input type="text" class="form-control" placeholder="جستجو..."
                                                        id="kt_datatable_search_query">
                                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                                </div>
                                            </div>

                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">وضعیت:</label>
                                                    <div class="dropdown bootstrap-select form-control"><select
                                                            class="form-control" id="kt_datatable_search_status">
                                                            <option value="">همه</option>
                                                            <option value="1">در انتظار</option>
                                                            <option value="2">تحویل داده شده</option>
                                                            <option value="3">لغو شده</option>
                                                            <option value="4">موفقیت</option>
                                                            <option value="5">اطلاعات</option>
                                                            <option value="6">هشدار</option>
                                                        </select>

                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-1"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">نوع:</label>
                                                    <div class="dropdown bootstrap-select form-control"><select
                                                            class="form-control" id="kt_datatable_search_type">
                                                            <option value="">همه</option>
                                                            <option value="1">Online</option>
                                                            <option value="2">Retail</option>
                                                            <option value="3">Direct</option>
                                                        </select>
                                                        <div class="dropdown-menu ">
                                                            <div class="inner show" role="listbox" id="bs-select-2"
                                                                tabindex="-1">
                                                                <ul class="dropdown-menu inner show" role="presentation">
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                            جستجو
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::جستجو Form-->
                            <!--end: جستجو Form-->

                            <!--begin: جدول داده ها-->
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block; overflow: auto;">
                                    <thead class="datatable-head">
                                        <tr class="datatable-row" style="left: 0px;">
                                            <th data-field="RecordID"
                                                class="datatable-cell-center datatable-cell datatable-cell-check">
                                                <span style="width: 20px;"><label
                                                        class="checkbox checkbox-single checkbox-all"><input
                                                            type="checkbox">&nbsp;<span></span></label></span>
                                            </th>
                                            <th data-field="ID" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">آیدی دیتابیس</span>
                                            </th>


                                            <th data-field="service" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">سرویس درخواستی</span>
                                            </th>

                                            <th data-field="count" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">تعداد درخواست شده</span>
                                            </th>

                                            <th data-field="amount" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">مبلغ تراکنش</span>
                                            </th>

                                            <th data-field="status" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">وضعیت تراکنش</span>
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
                                            @foreach ($transactions as $transaction)
                                                <tr id="{{ $transaction->id }}" data-row="{{ $i }}" class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                                        data-field="RecordID" aria-label="61"><span style="width: 20px;"><label
                                                                class="checkbox checkbox-single"><input type="checkbox"
                                                                    value="61">&nbsp;<span></span></label></span></td>

                                                    <td data-field="ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;" id="transaction-id">{{ $transaction->id }}</span>
                                                    </td>



                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $transaction->service->title }}</span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $transaction->service_count }}</span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ number_format($transaction->paid) }}
                                                            تومان</span>
                                                    </td>

                                                    <td aria-label="0363-0198" class="datatable-cell status-cell">
                                                        <span style="width: 137px;">
                                                            {{ $transaction->getStatusText()  }}
                                                        </span>
                                                    </td>


                                                    @can('edit transaction')
                                                        <td data-field="Actions" aria-label="0363-0198" class="datatable-cell">
                                                            <span style="width: 137px;">
                                                                <button type="button" class="btn btn-info data-show"
                                                                    data-action="{{ route('dashboard.transactions.show', $transaction->id) }}"
                                                                    data-method="GET">مشاهده و ویرایش</button>
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

                                                {{ $transactions->links() }}

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
                <div class="modal fade" id="transactionDetailsModal" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="none" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">اطلاعات تراکنش</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>

                            <form id="updateTransactionForm" action="" method="post">
                                @csrf
                                @method('PUT')

                                <div class="modal-body">



                                    <div data-scroll="true" data-height="500">




                                        <div class="form-group">
                                            <label>آیدی پرداخت</label>
                                            <input type="text" id="transaction-payment-id" class="form-control" disabled="disabled"
                                                value="">
                                        </div>

                                        <div class="form-group">
                                            <label>آیدی تراکنش (درگاه)</label>
                                            <input type="text" id="transaction-transaction-id"
                                                class="form-control transaction-modal-input" disabled="disabled" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>کاربر ثبت کرده</label>
                                            <input type="text" id="transaction-user" class="form-control transaction-modal-input"
                                                disabled="disabled" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>سیرویس درخواستی</label>
                                            <input type="text" id="transaction-service" class="form-control transaction-modal-input"
                                                disabled="disabled" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>تعداد درخواستی</label>
                                            <input type="text" id="transaction-count" class="form-control transaction-modal-input"
                                                disabled="disabled" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>مبلغ تراکنش</label>
                                            <input type="text" id="transaction-amount" class="form-control transaction-modal-input"
                                                disabled="disabled" value="">
                                        </div>



                                        <div class="form-group">
                                            <label>تاریخ ثبت</label>
                                            <input type="text" id="transaction-date" class="form-control transaction-modal-input"
                                                disabled="disabled" value="">
                                        </div>



                                        <div class="form-group">
                                            <label>وضعیت</label>
                                            <select name="status" class="form-control" id="transaction-status" data-id=""
                                                data-action="-1">

                                                <option value="{{ App\Models\Transaction::STATUS['pending'] }}">در انتظار پرداخت
                                                </option>
                                                <option value="{{ App\Models\Transaction::STATUS['success'] }}">موفق</option>
                                                <option value="{{ App\Models\Transaction::STATUS['failed'] }}">ناموفق</option>

                                            </select>
                                        </div>






                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">لغو</button>
                                        <button type="submit" id="saveTransaction"
                                            class="btn btn-danger font-weight-bold">ذخیره</button>
                                    </div>
                            </form>




                        </div>


                    </div>
                </div>
                </div>







            @endsection




            @section('scripts')

            @can('edit transaction')

            <script>
                        $(document).ready(function() {
                            const updateTransactionForm = $("#updateTransactionForm");
                            const modal = $("#transactionDetailsModal");

                            $(".data-show").click(function() {

                                const button = $(this);

                                const payId = $("#transaction-payment-id");
                                const transactionId = $("#transaction-transaction-id");
                                const user = $("#transaction-user");
                                const service = $("#transaction-service");
                                const count = $("#transaction-count");
                                const amount = $("#transaction-amount");
                                const status = $("#transaction-status");
                                const date = $("#transaction-date");

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr(
                                            'content')
                                    }
                                });

                                $.ajax({
                                    method: button.attr('data-method'),
                                    url: button.attr('data-action'),
                                    dataType: 'json',
                                    success: function(response) {

                                        const transaction = response.data;

                                        // set values of inputs fron response
                                        payId.val(transaction.payment_id);
                                        transactionId.val(transaction.transaction_id);
                                        user.val(transaction.user.name);
                                        service.val(transaction.service.title + " -- قیمت واحد : " +
                                            transaction.service.price);
                                        count.val(transaction.service_count);
                                        amount.val(transaction.paid);
                                        status.val(transaction.status);
                                        date.val(transaction.created_at);

                                        modal.modal('show');
                                        // set action of updating status
                                        // status.attr('data-action', response.update_route);
                                        updateTransactionForm.attr('action', response.update_route);

                                    },
                                    error: function(data) {
                                        //console.log(data);
                                        console.log('error');
                                    }

                                });

                            });

                            $("#saveTransaction").click(function(e) {
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
                                    method: updateTransactionForm.attr('method'),
                                    url: updateTransactionForm.attr('action'),
                                    dataType: 'json',
                                    data: updateTransactionForm.serialize(),
                                    success: function(response) {

                                        modal.modal('hide');

                                        if (response.status === 'success') {
                                            toastr["success"](response.message);
                                        } else {
                                            toastr["error"](response.message);
                                        }

                                        const statusTdToUpdate = $('tr#' + response.data.transaction_id + " .status-cell span");

                                        statusTdToUpdate.html(response.data.status_text);

                                    },
                                    error: function(data) {
                                        modal.modal('hide');

                                        //console.log(data);
                                        toastr["error"]('خطایی رخ داده است لطفا صفحه را رفرش کرده و دوباره امتحان کنید');
                                    }
                                });

                            });

                        });
                    </script>
            @endcan


                <!--begin::Page Scripts(used by this page)-->
                <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
                <!--end::Page Scripts-->
            @endsection

        </x-dashboard.layouts.main>
