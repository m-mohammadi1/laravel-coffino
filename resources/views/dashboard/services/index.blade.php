<x-dashboard.layouts.main>

    @section('title', 'كافينو  | مديريت سرویس ها')


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
                                    سرویس ها
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::دکمه-->
                                <a href="{{ route('dashboard.services.create') }}" class="btn btn-primary font-weight-bolder">
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
                                    </span>سرویس جديد 
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
                                                <span style="width: 137px;">آیدی</span>
                                            </th>

                                            <th data-field="Title" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">عنوان</span>
                                            </th>

                                            <th data-field="Cat" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">دسته بندی</span>
                                            </th>



                                            <th data-field="Actions" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 125px;">عملیات</span>
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

                                                    <td data-field="ID" aria-label="0363-0198" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->id }}</span>
                                                    </td>

                                                    <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->title }}</span>
                                                    </td>

                                                    <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->category->title }}</span>
                                                    </td>

                                                    <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                                        class="datatable-cell">
                                                        <span style="overflow: visible; position: relative; width: 125px;">
                                                            <a href="{{ route('dashboard.services.edit', $service) }}" class="btn btn-sm btn-clean btn-icon mr-2"
                                                                title="ويرايش">
                                                                <span class="svg-icon svg-icon-md">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path
                                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                                            </path>
                                                                            <rect fill="#000000" opacity="0.3" x="5" y="20"
                                                                                width="15" height="2" rx="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </a>

                                                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon entityDeleteButton"
                                                                title="حذف" data-id="{{ $service->id }}">
                                                                <span class="svg-icon svg-icon-md">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                            <path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero"></path>
                                                                            <path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </a>

                                                        </span>
                                                    </td>
                                                </tr>

                                                <form class="deleteEntityForm" id="ID-{{ $service->id }}"
                                                    action="{{ route('dashboard.services.destroy', $service) }}"
                                                    method="post">

                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                @php($i++)
                                                @endforeach



                                            </tbody>
                                        </table>

                                        <div class="datatable-pager datatable-paging-loaded">
                                            {{ $services->links() }}
                                            {{--  <ul class="datatable-pager-nav mb-5 mb-sm-0">
                                                <li><a title="اول" class="datatable-pager-link datatable-pager-link-first"
                                                        data-page="1"><i class="flaticon2-fast-next"></i></a></li>
                                                <li><a title="قبلی" class="datatable-pager-link datatable-pager-link-prev"
                                                        data-page="3"><i class="flaticon2-next"></i></a></li>
                                                <li style=""></li>
                                                <li style="display: none;"><input type="text"
                                                        class="datatable-pager-input form-control" title="شماره صفحه"></li>
                                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="1"
                                                        title="1">1</a>
                                                </li>
                                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2"
                                                        title="2">2</a>
                                                </li>
                                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3"
                                                        title="3">3</a>
                                                </li>
                                                <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                                        data-page="4" title="4">4</a></li>
                                                <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5"
                                                        title="5">5</a>
                                                </li>
                                                <li style=""></li>
                                                <li><a title="بعدی" class="datatable-pager-link datatable-pager-link-next"
                                                        data-page="5"><i class="flaticon2-back"></i></a></li>
                                                <li><a title="آخری" class="datatable-pager-link datatable-pager-link-last"
                                                        data-page="5"><i class="flaticon2-fast-back"></i></a></li>
                                            </ul>  --}}
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
                                حذف سرویس با آيدي‌
                                <span id="deletingEntityId">0</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">لغو</button>
                                <button type="button" id="confirmDeleteEntity"
                                    class="btn btn-danger font-weight-bold">حذف</button>
                            </div>
                        </div>
                    </div>
                </div>







            @endsection


            @section('scripts')

                <script>
                    $(document).ready(function() {
                        $(".entityDeleteButton").click(function() {
                            const button = $(this);
                            const entityID = button.attr('data-id');


                            // show category id in modal
                            $("#deletingEntityId").html(entityID);
                            // show modal
                            $('#deleteEntityModal').modal('show');

                            // delete category when modal confrimed
                            $("#confirmDeleteEntity").click(function() {
                                const form = $("#ID-" + entityID);
                                form.submit();
                            });
                        });
                    });
                </script>



                <!--begin::Page Scripts(used by this page)-->
                <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
                <!--end::Page Scripts-->
            @endsection

</x-dashboard.layouts.main>
