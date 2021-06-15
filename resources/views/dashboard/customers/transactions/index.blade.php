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
                                    تعداد ثبت شده برای سرویس ها
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                @can('create transaction')
                                    <!--begin::دکمه-->
                                    <a href="{{ route('dashboard.transactions.create') }}"
                                        class="btn btn-primary font-weight-bolder">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/طرح/Flatten.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                                    <path
                                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                        fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>تعداد جدید
                                    </a>
                                    <!--end::دکمه-->
                                @endcan
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
                                <table class="datatable-table" style="display: block;">
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

                                            <th data-field="Pay-ID" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">آیدی پرداخت</span>
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
                                                <span style="width: 137px;">تاریخ ثبت</span>
                                            </th>






                                        </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                        @php($i = 0)
                                            @foreach ($transactions as $transaction)
                                                <tr data-row="{{ $i }}" class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                                        data-field="RecordID" aria-label="61"><span style="width: 20px;"><label
                                                                class="checkbox checkbox-single"><input type="checkbox"
                                                                    value="61">&nbsp;<span></span></label></span></td>

                                                    <td data-field="ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $transaction->id }}</span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $transaction->payment_id }}</span>
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

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">
                                                            @if ($transaction->status === $transaction::STATUS_SUCCESS)
                                                                موفق
                                                            @elseif ($transaction->status === $transaction::STATUS_PENDING)
                                                                در انتظار پرداخت
                                                            @elseif ($transaction->status === $transaction::STATUS_REJECTED)
                                                                ناموفق
                                                            @else
                                                                نامعلوم
                                                            @endif



                                                        </span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $transaction->created_at }}</span>
                                                    </td>

                                                </tr>


                                                @php($i++)
                                                @endforeach



                                            </tbody>
                                        </table>

                                        <div class="datatable-pager datatable-paging-loaded">


                                            <div class="datatable-pager-info">


                                                <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;">

                                                    <select class="selectpicker form-control" title="انتخاب اندازه صفحه"
                                                        data-width="120px" data-selected="20">
                                                        <option class="bs-title-option" value="">انتخاب</option>
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="30">30</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                                <span class="datatable-pager-detail">نمایش 61 - 80 از 100</span>
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
                <div class="modal fade" id="deleteEntityModal" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="none" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">تایید حذف</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                حذف تعداد سرويس با آيدي‌
                                <span id="deletingEntityId">0</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">لغو</button>
                                <button type="button" id="confirmDeleteEntity" class="btn btn-danger font-weight-bold">حذف</button>
                            </div>
                        </div>
                    </div>
                </div>







            @endsection


            @section('scripts')

                <!--begin::Page Scripts(used by this page)-->
                <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
                <!--end::Page Scripts-->
            @endsection

        </x-dashboard.layouts.main>
