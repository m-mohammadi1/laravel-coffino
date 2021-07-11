<x-dashboard.layouts.main>

    @section('title', 'كافينو | درخواست های کاربر')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="flex-row-fluid ml-lg-8 d-block" id="kt_صندوق ورودی_list">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch">
                            <!--begin::Header-->
                            <div class="card-header row row-marginless align-items-center flex-wrap py-5 h-auto">
                                <!--begin::جستجو-->
                                <div
                                    class="col-xxl-3 d-flex order-1 order-xxl-2 align-items-center justify-content-center">
                                    <div class="input-group input-group-lg input-group-solid my-2">
                                        <input type="text" class="form-control pl-4" placeholder="جستجو...">
                                        <div class="input-group-append">
                        <span class="input-group-text pr-3">
                            <span class="svg-icon svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg-->
                                <svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <path
                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path
                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                            fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::جستجو-->
                                <!--begin::صفحه بندی-->
                                <div
                                    class="col-12 col-sm-6 col-xxl-4 order-2 order-xxl-3 d-flex align-items-center justify-content-sm-end text-right my-2">
                                    <!--begin::Per Page دراپ دان-->

                                    <!--end::Per Page دراپ دان-->
                                    <!--begin::Arrow دکمه ها-->
                                    <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title=""
                                          data-original-title="صفحه قبل">
                <i class="ki ki-bold-arrow-back icon-sm"></i>
                </span>
                                    <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title=""
                                          data-original-title="صفحه بعد">
                <i class="ki ki-bold-arrow-next icon-sm"></i>
                </span>
                                    <!--end::Arrow دکمه ها-->
                                    <!--begin::مرتب سازی دراپ دان-->
                                    <div class="dropdown mr-2" data-toggle="tooltip" title=""
                                         data-original-title="مرتب سازی">
                    <span class="btn btn-default btn-icon btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-console icon-1x"></i>
                    </span>
                                        <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                            <ul class="navi py-3">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link active">
                                                        <span class="navi-text">جدید</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">قدیمی ها</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">خوانده نشده</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end::مرتب سازی دراپ دان-->
                                </div>
                                <!--end::صفحه بندی-->
                            </div>
                            <!--end::Header-->


                            <!--begin::Body-->
                            <div class="card-body table-responsive px-0">
                                <!--begin::Items-->
                                <div class="list list-hover min-w-500px">

                                    @foreach($notifications as $not)
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-start list-item card-spacer-x py-3">
                                        <!--begin::اطلاعات-->
                                        <div class="flex-grow-1 mt-2 mr-2" data-toggle="view">
                                            <div>
                                                <span class="font-weight-bolder font-size-lg mr-2">{{ $not->title }}</span>
                                                <span class="text-muted">{{ $not->message }}</span>
                                            </div>
                                            <div class="mt-2">
                            <span
                                class="label label-light-primary font-weight-bold label-inline mr-1">صندوق ورودی</span>
                                                <span class="label label-light-danger font-weight-bold label-inline">وظیفه</span>
                                            </div>
                                        </div>
                                        <!--end::اطلاعات-->
                                        <!--begin::تاریخtime-->
                                        <div class="mt-2 mr-3 font-weight-bolder w-100px text-right" data-toggle="view">
                                            {{ $not->created_at->diffForHumans() }}
                                        </div>
                                        <!--end::تاریخtime-->
                                    </div>
                                    <!--end::Item-->
                                    @endforeach
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>


                </div>

            </div>

        </div>







    @endsection


</x-dashboard.layouts.main>
