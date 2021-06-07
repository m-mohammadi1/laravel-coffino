<ul class="menu-nav ">
    <li class="menu-item  menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here"
        data-menu-toggle="hover" aria-haspopup="true"><a href="javascript:;"
            class="menu-link menu-toggle">
            <span class="menu-text">داشبورد</span>
            <span class="menu-desc">آخرین آپدیت
                و گزارشات
            </span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
            <ul class="menu-subnav">
                <li class="menu-item  menu-item-active " aria-haspopup="true">
                    <a href="index.html" class="menu-link ">
                        <span class="menu-text">آخرین آپدیت</span>
                        <span class="menu-desc"></span>
                    </a>
                </li>
                <li class="menu-item " aria-haspopup="true">
                    <a target="_blank" href="https://preview.keenthemes.com/metronic/preview/demo9/builder.html" class="menu-link ">
                        <span class="menu-text">سازنده</span>
                            <span class="menu-desc"></span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    
    @hasanyrole('super-admin|admin')
        
        <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover"
            aria-haspopup="true"><a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">مدیریت</span>
                <span class="menu-desc">
                    دسترسي ادمين
                </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">

                    @can('manage users')
                        <li class="menu-item " aria-haspopup="true">
                            <a href="#"
                                class="menu-link ">
                                <span class="svg-icon menu-icon">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                                    <i class="la la-backward"></i>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-text">کاربران</span>
                            </a>
                        </li>
                    @endcan

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

                    <li class="menu-item " aria-haspopup="true">
                        <a href="{{ route('dashboard.counts.index') }}"
                            class="menu-link ">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                                <i class="la la-backward"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">تعداد ثبت شده سرویس ها</span>
                        </a>
                    </li>




                </ul>
            </div>
        </li>

    @endhasanyrole

</ul>