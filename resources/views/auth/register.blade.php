@extends('dashboard.layouts.auth')


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


                <!--begin::Login Sign up form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3>ثبت نام</h3>
                        <p class="opacity-60">برای ایجاد حساب کاربری ، جزئیات خود را وارد کنید</p>
                    </div>
                    <form class="form text-center" id="kt_login_signup_form" method="post"
                        action="{{ route('register') }}">
                        @csrf

                        <div class="form-group ">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="نام و ناو خانوادگی" name="name" required />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="پست الکترونیک" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                                type="password" placeholder="کلمه عبور" name="password" />
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                                type="password" placeholder="تکرار کلمه عبور" name="password_confirmation" />
                        </div>
                        <div class="form-group text-left px-8">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>
                                    می پذیرم <a href="#" class="text-white font-weight-bold ml-1">قوانین و
                                        مقررات</a>.
                                </label>
                            </div>
                            <div class="form-text text-muted text-center"></div>
                        </div>
                        <div class="form-group">
                            <button id="kt_login_signup_submit" type="submit"
                                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">ثبت
                                نام</button>
                        </div>
                    </form>
                </div>
                <!--end::Login Sign up form-->


            </div>
        </div>
    </div>
    <!--end::Login-->

@endsection
