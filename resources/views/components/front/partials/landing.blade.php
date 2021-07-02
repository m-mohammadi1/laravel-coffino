<section dir="rtl" id="section-hero" class="full-height vertical-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                <h4 class="id-color">ما متخصص سئو هستیم</h4>
                <div class="spacer-10"></div>
                <h1>
                    {{ $site_options['landing_header'] }}
                </h1>
                <p class="lead">
                    {{ $site_options['landing_sub_header'] }}
                </p>
                <div class="spacer-20"></div>
                <a class="btn-custom bg-color-2" href="{{ route('dashboard.index') }}">بزن بریم!</a>&nbsp;
                <a class="btn-custom" href="{{ route('faqs') }}">سوالی داری؟</a>
                <div class="mb-sm-30"></div>
            </div>
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".5s">
                <img src="{{ asset('front/images/misc/3.png') }}" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>
