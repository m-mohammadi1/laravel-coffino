<x-dashboard.layouts.main>

    @section('title', 'كافينو | درخواست های کاربر')


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
                                    وضعیت در خواست های من
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
                                                <span style="width: 137px;">سرویس درخواستی</span>
                                            </th>

                                            <th data-field="count" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">تعداد درخواست شده</span>
                                            </th>


                                            <th data-field="status" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">وضعیت پیگیری</span>
                                            </th>

                                            <th data-field="date" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">تاریخ ثبت</span>
                                            </th>






                                        </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                            @php($i = 0)
                                            @foreach ($services as $service)
                                                <tr data-row="{{ $i }}" class="datatable-row" style="left: 0px;">
                                                    <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                                        data-field="RecordID" aria-label="61"><span style="width: 20px;"><label
                                                                class="checkbox checkbox-single"><input type="checkbox"
                                                                    value="61">&nbsp;<span></span></label></span></td>

                                                    <td data-field="ID" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->id }}</span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->service->title }}</span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->service_count }}</span>
                                                    </td>


                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">
                                                            @if ($service->status === $service::STATUS['completed'])
                                                                تکمیل شده
                                                            @elseif ($service->status === $service::STATUS['progress'])
                                                                در حال انجام
                                                            @elseif ($service->status === $service::STATUS['pending'])
                                                                در انتظار بررسی
                                                            @elseif ($service->status === $service::STATUS['rejected'])
                                                                برگشت داده شده
                                                            @else
                                                                نامعلوم
                                                            @endif
                                                        </span>
                                                    </td>

                                                    <td data-field="-=Pay-ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->created_at }}</span>
                                                    </td>

                                                </tr>


                                                @php($i++)
                                            @endforeach



                                            </tbody>
                                        </table>

                                        <div class="datatable-pager datatable-paging-loaded">


                                            
                                        </div>
                                    </div>
                                    <!--end: جدول داده ها-->
                                </div>
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
