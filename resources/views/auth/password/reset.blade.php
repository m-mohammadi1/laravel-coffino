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

                @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-custom alert-notice alert-light-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ $error }}!</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="نزدیک">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endforeach

                @endif
                

                <!--begin::Login forgot password form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3>کلمه عبور خود را فراموش کرده اید؟</h3>
                        <p class="opacity-60">ایمیل تان را وارد کنید تا پسوردتان ریست شود</p>
                    </div>
                    <form class="form" id="kt_login_forgot_form">
                        <div class="form-group mb-10">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                                type="text" placeholder="پست الکترونیک" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <button id="kt_login_forgot_submit"
                                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">درخواست</button>
                            <button id="kt_login_forgot_cancel"
                                class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">لغو</button>
                        </div>
                    </form>
                </div>
                <!--end::Login forgot password form-->
            </div>
        </div>
    </div>
    <!--end::Login-->

@endsection
