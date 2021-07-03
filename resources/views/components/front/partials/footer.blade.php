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


            <div class="col-lg-4" style="background-size: cover;">
                <div class="widget" style="background-size: cover;">
                    <h5>صفحات</h5>
                    <ul>
                        <li><a href="#" title="بزودی">درباره ما</a></li>
                        <li><a href="{{ route('login') }}">ورود</a></li>
                    </ul>
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
