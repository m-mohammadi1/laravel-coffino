<ul class="menu-nav ">

    @hasanyrole('super-admin|admin')

    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
        <a
            href="javascript:;" class="menu-link menu-toggle">
            <span class="menu-text">صفحه اصلی و تنظیمات</span>
            <span class="menu-desc">
                مدیریت بخش ظاهری و تنظیمات
            </span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
            <ul class="menu-subnav">

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.faqs.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="fas fa-question-circle text-secondary text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">سوالات متداول</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.single-options.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="flaticon2-settings text-secondary text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">تنظیمات سایت</span>
                    </a>
                </li>


            </ul>
        </div>
    </li>


    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
        <a
            href="javascript:;" class="menu-link menu-toggle">
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
                        <a href="#" class="menu-link">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                                <i class="fas fa-users text-dark text-hover-danger"></i>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-text">کاربران</span>
                        </a>
                    </li>
                @endcan

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.categories.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="flaticon2-indent-dots text-dark text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">دسته بندي ها</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.services.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="fab fa-servicestack text-dark text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">سرويس ها</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.counts.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="fab fa-stack-overflow text-dark text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">تعداد ثبت شده سرویس ها</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.transactions.index') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="flaticon-graphic-2 text-dark text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">مدیریت تراکنش ها</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.purchases.index') }}" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                        <i class="flaticon2-supermarket text-dark text-hover-danger"></i>
                        <!--end::Svg Icon-->
                    </span>
                        <span class="menu-text">مدیریت سرویس های درخواستی</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.comments.index') }}" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                        <i class="far fa-comments text-dark text-hover-danger"></i>
                        <!--end::Svg Icon-->
                    </span>
                        <span class="menu-text">نظرات ثبت شده</span>
                    </a>
                </li>

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.tickets.index') }}" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                        <i class="flaticon-support text-dark text-hover-danger"></i>
                        <!--end::Svg Icon-->
                    </span>
                        <span class="menu-text">تیکت های ثبت شده</span>
                    </a>
                </li>

                    <li class="menu-item " aria-haspopup="true">
                        <a href="{{ route('dashboard.notifications.create') }}" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                        <i class="flaticon2-notification text-dark text-hover-danger"></i>
                        <!--end::Svg Icon-->
                    </span>
                            <span class="menu-text">ارسال نوتیفیکیشن</span>
                        </a>
                    </li>


            </ul>
        </div>
    </li>

    @endhasanyrole


    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
        <a
            href="javascript:;" class="menu-link menu-toggle">
            <span class="menu-text">بخش پرداخت</span>
            <span class="menu-desc">
                خرید و مدیریت پرداخت ها
            </span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
            <ul class="menu-subnav">

                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.customers.services') }}" class="menu-link ">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="fas fa-shopping-basket text-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">خرید سرویس</span>
                    </a>
                </li>


                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                    <a
                        href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">تراکنش ها</span><i class="menu-arrow">
                        </i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-right"
                         data-hor-direction="menu-submenu-right">
                        <ul class="menu-subnav">

                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('dashboard.customers.transactions') }}"
                                   class="menu-link "><i class="menu-bullet menu-bullet-dot">
                                        <span></span></i>
                                    <span class="menu-text">مشاهده تراکنش ها</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                    <a
                        href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">درخواست ها</span><i class="menu-arrow">
                        </i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-right"
                         data-hor-direction="menu-submenu-right">
                        <ul class="menu-subnav">

                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('dashboard.customers.purchased_services') }}"
                                   class="menu-link "><i class="menu-bullet menu-bullet-dot">
                                        <span></span></i>
                                    <span class="menu-text">وضعیت درخواست های من</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </li>


    <li class="menu-item  menu-item-submenu menu-item-rel" data-menu-toggle="hover" aria-haspopup="true">
        <a
            href="javascript:;" class="menu-link menu-toggle">
            <span class="menu-text">پشتیبانی</span>
            <span class="menu-desc">
                ثبت پیام پشتیبانی
            </span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
            <ul class="menu-subnav">

                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                    <a
                        href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">تیکت ها</span><i class="menu-arrow">
                        </i>
                    </a>
                    <div class="menu-submenu menu-submenu-classic menu-submenu-left"
                         data-hor-direction="menu-submenu-left">
                        <ul class="menu-subnav">

                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('dashboard.customers.tickets.index') }}"
                                   class="menu-link "><i class="menu-bullet menu-bullet-dot">
                                        <span></span></i>
                                    <span class="menu-text">تیکت های من</span>
                                </a>
                            </li>

                            <li class="menu-item " aria-haspopup="true">
                                <a href="{{ route('dashboard.customers.tickets.create') }}"
                                   class="menu-link ">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span></i>
                                    <span class="menu-text">ثبت تیکت</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li class="menu-item " aria-haspopup="true">
                    <a href="{{ route('dashboard.customers.create_comment') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                            <i class="la flaticon-edit text-secondary text-hover-danger"></i>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-text">ثبت نظر</span>
                    </a>
                </li>


            </ul>
        </div>
    </li>


</ul>
