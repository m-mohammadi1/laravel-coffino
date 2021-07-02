<footer class="footer footer-light" dir="rtl">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-4">
                <div class="widget">
                    <a href="{{ route('home') }}"><img alt="" class="logo" src="{{ asset('front/images/logo-1.png') }}"></a>
                    <div class="spacer-20"></div>
                    <p>{{ $site_options['footer_text'] }}</p>
                </div>
            </div>





            <div class="col-lg-4">
                <div class="widget">
                    <h5>خبرنامه</h5>
                    <p>برای دریافت آخرین  ، به بی در خ
                    </p>
                    <form action="blank.php" class="row" id="form_subscribe" method="post" name="form_subscribe">
                        <div class="col text-center">
                            <a href="#" id="btn-submit"><i class="arrow_left"></i></a>
                            <input class="form-control" id="name_1" name="name_1" placeholder="ایمیل را وارد کنید" type="text" />
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small>ایمیل شما در دسترس ما نیست. ما اسپم نمی کنیم</small>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between">
            <div class="col-md-6 sm-text-center mb-sm-30">
                <div class="mt10">
                    {{ $site_options['footer_copyright'] }}
                    <i class="fa fa-twitter fa-lg"></i>
                </div>
            </div>


            <div class="col-md-6 text-md-right text-sm-left text-left" dir="ltr">
                <div class="social-icons text-left">
                    <a href="{{ $site_options['social_telegram'] }}"><i class="fa fa-telegram fa-lg"></i></a>
                    <a href="{{ $site_options['social_linkedin'] }}"><i class="fa fa-linkedin fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
