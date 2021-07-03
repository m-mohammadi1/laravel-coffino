<header class="header-light transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center header-col-left">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img alt="" src="{{ asset('front/images/logo-2.png') }}" />
                            </a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="align-self-center ml-auto header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu" class=" d-lg-flex">
                            <li>
                                <a href="{{ route('home') }}">خانه</a>
{{--                                <ul>--}}
{{--                                    <li><a href="index.html">اصلی</a></li>--}}
{{--                                    <li><a href="index-startup.html">استارتاپ</a></li>--}}
{{--                                </ul>--}}
                            </li>
                            <li>
                                <a href="{{ route('faqs') }}">سوالات متداول</a>
                            </li>

                            <li>
                                <a href="{{ route('dashboard.index') }}">داشبورد</a>
                            </li>
                        </ul>
                    </div>
                    <div class="align-self-center ml-auto header-col-right">
                        <span id="menu-btn"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
