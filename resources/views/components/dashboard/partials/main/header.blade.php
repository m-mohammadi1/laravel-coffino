<div id="kt_header" class="header flex-column  header-fixed ">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::راست-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Logo-->
                <a href="index.html" class="mr-20">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-9.png') }}" class="max-h-35px" />
                </a>
                <!--end::Logo-->

                <!--begin::Desktop جستجو-->
                <div class="quick-search quick-search-inline ml-4 w-300px" id="kt_quick_search_inline">
                    <!--begin::Form-->
                    <form method="get" class="quick-search-form">
                        <div class="input-group rounded bg-light">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="svg-icon svg-icon-lg">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span> </span>
                            </div>

                            <input type="text" class="form-control h-45px" placeholder="جستجو..." />

                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="quick-search-close ki ki-close icon-sm"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->

                    <!--begin::جستجو Toggle-->
                    <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
                    <!--end::جستجو Toggle-->

                    <!--begin::دراپ دان-->
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="350"
                            data-mobile-height="200">
                        </div>
                    </div>
                    <!--end::دراپ دان-->
                </div>
                <!--end::Desktop جستجو-->
            </div>
            <!--end::راست-->

            <!--begin::Topbar-->
            <div class="topbar">
                <!--begin::Tablet & Mobile جستجو-->
                <div class="dropdown d-flex d-lg-none">
                    <!--begin::Toggle-->
                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                        <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
                            <span class="svg-icon svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        <path
                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                    </div>
                    <!--end::Toggle-->

                    <!--begin::دراپ دان-->
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                        <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                            <!--begin:Form-->
                            <form method="get" class="quick-search-form">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/عمومی/جستجو.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span> </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="جستجو..." />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->

                            <!--begin::Scroll-->
                            <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                                data-mobile-height="200">
                            </div>
                            <!--end::Scroll-->
                        </div>
                    </div>
                    <!--end::دراپ دان-->
                </div>
                <!--end::Tablet & Mobile جستجو-->

    
           

                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-auto d-flex align-items-center btn-lg px-2"
                        id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-3">
                            <span
                                class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline">{{ auth()->user()->name }}</span>
                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline">طراح</span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">
                                {{ Str::substr(auth()->user()->name, 0, 1) }}
                            </span>
                        </span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Top-->

    <!--begin::Bottom-->
    <div class="header-bottom">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu"
                    class="header-menu header-menu-left header-menu-mobile  header-menu-layout-default ">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav ">
                        <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here"
                            data-menu-toggle="hover" aria-haspopup="true"><a href="javascript:;"
                                class="menu-link menu-toggle"><span class="menu-text">داشبورد</span><span
                                    class="menu-desc">آخرین آپدیت
                                    و گزارشات</span><i class="menu-arrow"></i></a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                <ul class="menu-subnav">
                                    <li class="menu-item  menu-item-active " aria-haspopup="true"><a href="index.html"
                                            class="menu-link "><span class="menu-text">آخرین آپدیت</span><span
                                                class="menu-desc"></span></a></li>
                                    <li class="menu-item " aria-haspopup="true"><a target="_blank"
                                            href="https://preview.keenthemes.com/metronic/preview/demo9/builder.html"
                                            class="menu-link "><span class="menu-text">چیدمان
                                                سازنده</span><span class="menu-desc"></span></a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
                            aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle">
                                <span class="menu-text">مدیریت</span><span class="menu-desc">
                                    دسترسي ادمين
                                </span><i class="menu-arrow"></i></a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                <ul class="menu-subnav">

                                    <li class="menu-item " aria-haspopup="true">
                                        <a href="{{ route('dashboard.categories.index') }}"
                                            class="menu-link ">
                                            <span class="svg-icon menu-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                                                <i class="la la-backward"></i>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-text">دسته بندي ها</span>
                                        </a>
                                    </li>

                                    <li class="menu-item " aria-haspopup="true">
                                        <a href="{{ route('dashboard.services.index') }}"
                                            class="menu-link ">
                                            <span class="svg-icon menu-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                                                <i class="la la-backward"></i>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <span class="menu-text">سرويس ها</span>
                                        </a>
                                    </li>


                    

                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Bottom-->
</div>
