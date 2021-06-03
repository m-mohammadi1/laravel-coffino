<x-dashboard.layouts.main>

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <x-dashboard.partials.success />

                </div>

            </div>

        </div>

        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">
                        داده های محلی
                        <span class="text-muted pt-2 font-size-sm d-block">داده های به صورت آرایه ای در جاوا اسکریپت</span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::دراپ دان-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/desgin/PenAndRuller.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path
                                            d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                            fill="#000000" opacity="0.3"></path>
                                        <path
                                            d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                            fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span> خروجی گرفتن
                        </button>

                        <!--begin::دراپ دان Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                    گزینه ای را انتخاب کنید:
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="la la-print"></i></span>
                                        <span class="navi-text">چاپ</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="la la-copy"></i></span>
                                        <span class="navi-text">کپی</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                        <span class="navi-text">اکسل</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                        <span class="navi-text">CSV</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
                                        <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                        <span class="navi-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                        <!--end::دراپ دان Menu-->
                    </div>
                    <!--end::دراپ دان-->

                    <!--begin::دکمه-->
                    <a href="#" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/طرح/Flatten.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                    <path
                                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                        fill="#000000" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span> جدید رکورد
                    </a>
                    <!--end::دکمه-->
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
                                        <div class="dropdown bootstrap-select form-control"><select class="form-control"
                                                id="kt_datatable_search_status">
                                                <option value="">همه</option>
                                                <option value="1">در انتظار</option>
                                                <option value="2">تحویل داده شده</option>
                                                <option value="3">لغو شده</option>
                                                <option value="4">موفقیت</option>
                                                <option value="5">اطلاعات</option>
                                                <option value="6">هشدار</option>
                                            </select><button type="button" tabindex="-1"
                                                class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown"
                                                role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                                aria-expanded="false" data-id="kt_datatable_search_status" title="همه">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">همه</div>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu ">
                                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">نوع:</label>
                                        <div class="dropdown bootstrap-select form-control"><select class="form-control"
                                                id="kt_datatable_search_type">
                                                <option value="">همه</option>
                                                <option value="1">Online</option>
                                                <option value="2">Retail</option>
                                                <option value="3">Direct</option>
                                            </select><button type="button" tabindex="-1"
                                                class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown"
                                                role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"
                                                aria-expanded="false" data-id="kt_datatable_search_type" title="همه">
                                                <div class="filter-option">
                                                    <div class="filter-option-inner">
                                                        <div class="filter-option-inner-inner">همه</div>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu ">
                                                <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
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
                                <th data-field="RecordID" class="datatable-cell-center datatable-cell datatable-cell-check">
                                    <span style="width: 20px;"><label class="checkbox checkbox-single checkbox-all"><input
                                                type="checkbox">&nbsp;<span></span></label></span></th>
                                <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 137px;">آیدی</span></th>
                                <th data-field="Country" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 137px;">کشور</span></th>
                                <th data-field="ShipDate" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 137px;">تاریخ حمل</span></th>
                                <th data-field="CompanyName" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 137px;">نام شرکت</span></th>
                                <th data-field="Status" class="datatable-cell datatable-cell-sort"><span
                                        style="width: 137px;">وضعیت</span></th>
                                <th data-field="Type" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span style="width: 137px;">نوع</span></th>
                                <th data-field="Actions" data-autohide-disabled="false"
                                    class="datatable-cell datatable-cell-sort"><span style="width: 125px;">عملیات</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="datatable-body" style="">
                            <tr data-row="0" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="61"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="61">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="0363-0198" class="datatable-cell"><span
                                        style="width: 137px;">0363-0198</span></td>
                                <td data-field="Country" aria-label="Philippines" class="datatable-cell"><span
                                        style="width: 137px;">Philippines PH</span></td>
                                <td data-field="ShipDate" aria-label="8/30/2017" class="datatable-cell"><span
                                        style="width: 137px;">8/30/2017</span></td>
                                <td data-field="CompanyName" aria-label="Simonis and Sons" class="datatable-cell"><span
                                        style="width: 137px;">Simonis and Sons</span></td>
                                <td data-field="Status" aria-label="5" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-info label-inline">اطلاعات</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="1" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="62"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="62">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="65862-142" class="datatable-cell"><span
                                        style="width: 137px;">65862-142</span></td>
                                <td data-field="Country" aria-label="Indonesia" class="datatable-cell"><span
                                        style="width: 137px;">Indonesia ID</span></td>
                                <td data-field="ShipDate" aria-label="3/4/2016" class="datatable-cell"><span
                                        style="width: 137px;">3/4/2016</span></td>
                                <td data-field="CompanyName" aria-label="Dach-Ernser" class="datatable-cell"><span
                                        style="width: 137px;">Dach-Ernser</span></td>
                                <td data-field="Status" aria-label="6" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">خطار</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="2" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="63"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="63">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="67510-1561" class="datatable-cell"><span
                                        style="width: 137px;">67510-1561</span></td>
                                <td data-field="Country" aria-label="Peru" class="datatable-cell"><span
                                        style="width: 137px;">Peru PE</span></td>
                                <td data-field="ShipDate" aria-label="6/27/2017" class="datatable-cell"><span
                                        style="width: 137px;">6/27/2017</span></td>
                                <td data-field="CompanyName" aria-label="Wisozk-Ratke" class="datatable-cell"><span
                                        style="width: 137px;">Wisozk-Ratke</span></td>
                                <td data-field="Status" aria-label="5" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-info label-inline">اطلاعات</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="3" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="64"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="64">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="67877-169" class="datatable-cell"><span
                                        style="width: 137px;">67877-169</span></td>
                                <td data-field="Country" aria-label="Brazil" class="datatable-cell"><span
                                        style="width: 137px;">Brazil BR</span></td>
                                <td data-field="ShipDate" aria-label="9/21/2017" class="datatable-cell"><span
                                        style="width: 137px;">9/21/2017</span></td>
                                <td data-field="CompanyName" aria-label="Schuster, Flatley and Ledner"
                                    class="datatable-cell"><span style="width: 137px;">Schuster, Flatley and Ledner</span>
                                </td>
                                <td data-field="Status" aria-label="4" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-success label-inline">موفق</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="4" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="65"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="65">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="13537-402" class="datatable-cell"><span
                                        style="width: 137px;">13537-402</span></td>
                                <td data-field="Country" aria-label="Uganda" class="datatable-cell"><span
                                        style="width: 137px;">Uganda UG</span></td>
                                <td data-field="ShipDate" aria-label="7/8/2016" class="datatable-cell"><span
                                        style="width: 137px;">7/8/2016</span></td>
                                <td data-field="CompanyName" aria-label="Kuphal Inc" class="datatable-cell"><span
                                        style="width: 137px;">Kuphal Inc</span></td>
                                <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">تحویل
                                            داده شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="5" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="66"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="66">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="48951-8237" class="datatable-cell"><span
                                        style="width: 137px;">48951-8237</span></td>
                                <td data-field="Country" aria-label="Portugal" class="datatable-cell"><span
                                        style="width: 137px;">Portugal PT</span></td>
                                <td data-field="ShipDate" aria-label="12/6/2016" class="datatable-cell"><span
                                        style="width: 137px;">12/6/2016</span></td>
                                <td data-field="CompanyName" aria-label="Kautzer Inc" class="datatable-cell"><span
                                        style="width: 137px;">Kautzer Inc</span></td>
                                <td data-field="Status" aria-label="1" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-success label-inline">در حال
                                            انجام</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="6" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="67"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="67">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="36987-3279" class="datatable-cell"><span
                                        style="width: 137px;">36987-3279</span></td>
                                <td data-field="Country" aria-label="Spain" class="datatable-cell"><span
                                        style="width: 137px;">Spain ES</span></td>
                                <td data-field="ShipDate" aria-label="11/2/2016" class="datatable-cell"><span
                                        style="width: 137px;">11/2/2016</span></td>
                                <td data-field="CompanyName" aria-label="Jacobson-Brakus" class="datatable-cell"><span
                                        style="width: 137px;">Jacobson-Brakus</span></td>
                                <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">تحویل
                                            داده شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="7" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="68"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="68">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="36987-3092" class="datatable-cell"><span
                                        style="width: 137px;">36987-3092</span></td>
                                <td data-field="Country" aria-label="Belarus" class="datatable-cell"><span
                                        style="width: 137px;">Belarus BY</span></td>
                                <td data-field="ShipDate" aria-label="4/12/2017" class="datatable-cell"><span
                                        style="width: 137px;">4/12/2017</span></td>
                                <td data-field="CompanyName" aria-label="Sipes, Schaden and Larkin" class="datatable-cell">
                                    <span style="width: 137px;">Sipes, Schaden and Larkin</span></td>
                                <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-primary label-inline">لغو
                                            شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="8" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="69"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="69">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="17271-503" class="datatable-cell"><span
                                        style="width: 137px;">17271-503</span></td>
                                <td data-field="Country" aria-label="Slovenia" class="datatable-cell"><span
                                        style="width: 137px;">Slovenia SI</span></td>
                                <td data-field="ShipDate" aria-label="6/26/2017" class="datatable-cell"><span
                                        style="width: 137px;">6/26/2017</span></td>
                                <td data-field="CompanyName" aria-label="Reinger Inc" class="datatable-cell"><span
                                        style="width: 137px;">Reinger Inc</span></td>
                                <td data-field="Status" aria-label="4" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-success label-inline">موفق</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="9" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="70"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="70">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="49288-0206" class="datatable-cell"><span
                                        style="width: 137px;">49288-0206</span></td>
                                <td data-field="Country" aria-label="France" class="datatable-cell"><span
                                        style="width: 137px;">France FR</span></td>
                                <td data-field="ShipDate" aria-label="11/18/2017" class="datatable-cell"><span
                                        style="width: 137px;">11/18/2017</span></td>
                                <td data-field="CompanyName" aria-label="Dicki and Sons" class="datatable-cell"><span
                                        style="width: 137px;">Dicki and Sons</span></td>
                                <td data-field="Status" aria-label="6" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">خطار</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="10" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="71"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="71">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="55312-118" class="datatable-cell"><span
                                        style="width: 137px;">55312-118</span></td>
                                <td data-field="Country" aria-label="Belarus" class="datatable-cell"><span
                                        style="width: 137px;">Belarus BY</span></td>
                                <td data-field="ShipDate" aria-label="10/13/2017" class="datatable-cell"><span
                                        style="width: 137px;">10/13/2017</span></td>
                                <td data-field="CompanyName" aria-label="Jacobs, Blanda and Dickinson"
                                    class="datatable-cell"><span style="width: 137px;">Jacobs, Blanda and Dickinson</span>
                                </td>
                                <td data-field="Status" aria-label="3" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-primary label-inline">لغو
                                            شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="11" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="72"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="72">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="49035-111" class="datatable-cell"><span
                                        style="width: 137px;">49035-111</span></td>
                                <td data-field="Country" aria-label="Brazil" class="datatable-cell"><span
                                        style="width: 137px;">Brazil BR</span></td>
                                <td data-field="ShipDate" aria-label="1/18/2016" class="datatable-cell"><span
                                        style="width: 137px;">1/18/2016</span></td>
                                <td data-field="CompanyName" aria-label="Zboncak-Dooley" class="datatable-cell"><span
                                        style="width: 137px;">Zboncak-Dooley</span></td>
                                <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">تحویل
                                            داده شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="12" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="73"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="73">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="33261-888" class="datatable-cell"><span
                                        style="width: 137px;">33261-888</span></td>
                                <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                        style="width: 137px;">China CN</span></td>
                                <td data-field="ShipDate" aria-label="11/24/2016" class="datatable-cell"><span
                                        style="width: 137px;">11/24/2016</span></td>
                                <td data-field="CompanyName" aria-label="Lemke Inc" class="datatable-cell"><span
                                        style="width: 137px;">Lemke Inc</span></td>
                                <td data-field="Status" aria-label="5" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-info label-inline">اطلاعات</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="13" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="74"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="74">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="60709-105" class="datatable-cell"><span
                                        style="width: 137px;">60709-105</span></td>
                                <td data-field="Country" aria-label="Philippines" class="datatable-cell"><span
                                        style="width: 137px;">Philippines PH</span></td>
                                <td data-field="ShipDate" aria-label="5/21/2017" class="datatable-cell"><span
                                        style="width: 137px;">5/21/2017</span></td>
                                <td data-field="CompanyName" aria-label="Schimmel, Mohr and Kutch" class="datatable-cell">
                                    <span style="width: 137px;">Schimmel, Mohr and Kutch</span></td>
                                <td data-field="Status" aria-label="5" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-info label-inline">اطلاعات</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="14" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="75"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="75">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="63629-2679" class="datatable-cell"><span
                                        style="width: 137px;">63629-2679</span></td>
                                <td data-field="Country" aria-label="Finland" class="datatable-cell"><span
                                        style="width: 137px;">Finland FI</span></td>
                                <td data-field="ShipDate" aria-label="11/20/2016" class="datatable-cell"><span
                                        style="width: 137px;">11/20/2016</span></td>
                                <td data-field="CompanyName" aria-label="Bergnaum-Kozey" class="datatable-cell"><span
                                        style="width: 137px;">Bergnaum-Kozey</span></td>
                                <td data-field="Status" aria-label="4" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-success label-inline">موفق</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="15" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="76"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="76">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="36800-277" class="datatable-cell"><span
                                        style="width: 137px;">36800-277</span></td>
                                <td data-field="Country" aria-label="Serbia" class="datatable-cell"><span
                                        style="width: 137px;">Serbia RS</span></td>
                                <td data-field="ShipDate" aria-label="9/19/2017" class="datatable-cell"><span
                                        style="width: 137px;">9/19/2017</span></td>
                                <td data-field="CompanyName" aria-label="Schulist-Yost" class="datatable-cell"><span
                                        style="width: 137px;">Schulist-Yost</span></td>
                                <td data-field="Status" aria-label="1" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-success label-inline">در حال
                                            انجام</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="16" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="77"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="77">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="52125-910" class="datatable-cell"><span
                                        style="width: 137px;">52125-910</span></td>
                                <td data-field="Country" aria-label="Armenia" class="datatable-cell"><span
                                        style="width: 137px;">Armenia AM</span></td>
                                <td data-field="ShipDate" aria-label="5/24/2017" class="datatable-cell"><span
                                        style="width: 137px;">5/24/2017</span></td>
                                <td data-field="CompanyName" aria-label="Rosenbaum Inc" class="datatable-cell"><span
                                        style="width: 137px;">Rosenbaum Inc</span></td>
                                <td data-field="Status" aria-label="5" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-info label-inline">اطلاعات</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="3" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-success label-dot mr-2"></span><span
                                            class="font-weight-bold text-success">مستقیم</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="17" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="78"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="78">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="24236-120" class="datatable-cell"><span
                                        style="width: 137px;">24236-120</span></td>
                                <td data-field="Country" aria-label="France" class="datatable-cell"><span
                                        style="width: 137px;">France FR</span></td>
                                <td data-field="ShipDate" aria-label="2/5/2016" class="datatable-cell"><span
                                        style="width: 137px;">2/5/2016</span></td>
                                <td data-field="CompanyName" aria-label="Witting-Von" class="datatable-cell"><span
                                        style="width: 137px;">Witting-Von</span></td>
                                <td data-field="Status" aria-label="6" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">خطار</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="1" class="datatable-cell">
                                    <span style="width: 137px;"><span class="label label-danger label-dot mr-2"></span><span
                                            class="font-weight-bold text-danger">برخط</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="18" class="datatable-row" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="79"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="79">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="76173-1008" class="datatable-cell"><span
                                        style="width: 137px;">76173-1008</span></td>
                                <td data-field="Country" aria-label="Pakistan" class="datatable-cell"><span
                                        style="width: 137px;">Pakistan PK</span></td>
                                <td data-field="ShipDate" aria-label="1/29/2016" class="datatable-cell"><span
                                        style="width: 137px;">1/29/2016</span></td>
                                <td data-field="CompanyName" aria-label="Kunde-Veum" class="datatable-cell"><span
                                        style="width: 137px;">Kunde-Veum</span></td>
                                <td data-field="Status" aria-label="6" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">خطار</span></span>
                                </td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                            <tr data-row="19" class="datatable-row datatable-row-even" style="left: 0px;">
                                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                    data-field="RecordID" aria-label="80"><span style="width: 20px;"><label
                                            class="checkbox checkbox-single"><input type="checkbox"
                                                value="80">&nbsp;<span></span></label></span></td>
                                <td data-field="OrderID" aria-label="41163-146" class="datatable-cell"><span
                                        style="width: 137px;">41163-146</span></td>
                                <td data-field="Country" aria-label="China" class="datatable-cell"><span
                                        style="width: 137px;">China CN</span></td>
                                <td data-field="ShipDate" aria-label="3/5/2016" class="datatable-cell"><span
                                        style="width: 137px;">3/5/2016</span></td>
                                <td data-field="CompanyName" aria-label="Brown-Hudson" class="datatable-cell"><span
                                        style="width: 137px;">Brown-Hudson</span></td>
                                <td data-field="Status" aria-label="2" class="datatable-cell"><span
                                        style="width: 137px;"><span
                                            class="label font-weight-bold label-lg  label-light-danger label-inline">تحویل
                                            داده شده</span></span></td>
                                <td data-field="Type" data-autohide-disabled="false" aria-label="2" class="datatable-cell">
                                    <span style="width: 137px;"><span
                                            class="label label-primary label-dot mr-2"></span><span
                                            class="font-weight-bold text-primary">خرده فروشی</span></span></td>
                                <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                    class="datatable-cell"><span
                                        style="overflow: visible; position: relative; width: 125px;">
                                        <div class="dropdown dropdown-inline"> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                fill="#000000"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <ul class="navi flex-column navi-hover py-2">
                                                    <li
                                                        class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                        انتخاب عملیات: </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-print"></i></span> <span
                                                                class="navi-text">پرینت</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-copy"></i></span> <span
                                                                class="navi-text">کپی</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                                            <span class="navi-text">اکسل</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-text-o"></i></span>
                                                            <span class="navi-text">CSV</span> </a> </li>
                                                    <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                                            <span class="navi-text">PDF</span> </a> </li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                            title="Edit details"> <span class="svg-icon svg-icon-md"> <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                        </path>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                            height="2" rx="1"></rect>
                                                    </g>
                                                </svg> </span> </a> <a href="javascript:;"
                                            class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                            fill="#000000" fill-rule="nonzero"></path>
                                                        <path
                                                            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg> </span> </a>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="datatable-pager datatable-paging-loaded">
                        <ul class="datatable-pager-nav mb-5 mb-sm-0">
                            <li><a title="اول" class="datatable-pager-link datatable-pager-link-first" data-page="1"><i
                                        class="flaticon2-fast-next"></i></a></li>
                            <li><a title="قبلی" class="datatable-pager-link datatable-pager-link-prev" data-page="3"><i
                                        class="flaticon2-next"></i></a></li>
                            <li style=""></li>
                            <li style="display: none;"><input type="text" class="datatable-pager-input form-control"
                                    title="شماره صفحه"></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="1" title="1">1</a>
                            </li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a>
                            </li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3" title="3">3</a>
                            </li>
                            <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                    data-page="4" title="4">4</a></li>
                            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a>
                            </li>
                            <li style=""></li>
                            <li><a title="بعدی" class="datatable-pager-link datatable-pager-link-next" data-page="5"><i
                                        class="flaticon2-back"></i></a></li>
                            <li><a title="آخری" class="datatable-pager-link datatable-pager-link-last" data-page="5"><i
                                        class="flaticon2-fast-back"></i></a></li>
                        </ul>
                        <div class="datatable-pager-info">
                            <div class="dropdown bootstrap-select datatable-pager-size" style="width: 60px;"><select
                                    class="selectpicker datatable-pager-size" title="انتخاب اندازه صفحه" data-width="60px"
                                    data-container="body" data-selected="20">
                                    <option class="bs-title-option" value=""></option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                    data-toggle="dropdown" role="combobox" aria-owns="bs-select-7" aria-haspopup="listbox"
                                    aria-expanded="false" title="انتخاب اندازه صفحه">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">20</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu ">
                                    <div class="inner show" role="listbox" id="bs-select-7" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div><span class="datatable-pager-detail">نمایش 61 - 80 از 100</span>
                        </div>
                    </div>
                </div>
                <!--end: جدول داده ها-->
            </div>
        </div>



    @endsection


    @section('scripts')


        <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
        <!--end::Page Scripts-->
    @endsection

</x-dashboard.layouts.main>
