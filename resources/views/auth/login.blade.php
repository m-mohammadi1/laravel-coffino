<x-auth.main>

    @section('title', 'لاگین')

    @section('content')

        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url(assets/media/bg/bg-1.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="assets/media/logos/logo-letter-9.png" class="max-h-100px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->

                    <x-dashboard.partials.error />

                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>ورود به پنل مدیریت</h3>
                            <p class="opacity-60 font-weight-bold">نام کاربری و کلمه عبور خود را وارد کنید</p>
                        </div>
                        <form class="form" id="kt_login_signin_form" method="post" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="email" placeholder="پست الکترونیک" name="email" autocomplete="off" required
                                    value="{{ old('email') }}" />
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5"
                                    type="password" placeholder="کلمه عبور" name="password"
                                    value="{{ old('password') }}" />
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                        <input type="checkbox" name="remember" />
                                        <span></span>
                                        مرا به خاطر بسپار
                                    </label>
                                </div>
                                <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">کلمه
                                    عبور را فراموش کرده اید؟</a>
                            </div>
                            <div class="form-group text-center mt-10">
                                <button id="kt_login_signin_submit" type="submit"
                                    class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">ورود</button>
                            </div>
                        </form>
                        <div class="mt-10">
                            <span class="opacity-70 mr-4">
                                حساب کاربری ندارید؟
                            </span>
                            <a href="{{ route('register') }}" id="kt_login_signup" class="text-white font-weight-bold">ثبت
                                نام</a>
                        </div>
                    </div>
                    <!--end::Login Sign in form-->

                </div>
            </div>
        </div>
        <!--end::Login-->

    @endsection

</x-auth.main>
