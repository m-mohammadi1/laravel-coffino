<x-front.layouts.main>

    @section('content')

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section dir="rtl" id="section-hero" class="full-height vertical-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                            <h4 class="id-color">ما متخصص سئو هستیم</h4>
                            <div class="spacer-10"></div>
                            <h1>آماده راه اندازی کسب و کار خود هستید؟</h1>
                            <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                                طراحان گرافیک است، چاپگرها و متون</p>
                            <div class="spacer-20"></div>
                            <a class="btn-custom bg-color-2" href="#">بزن بریم!</a>&nbsp;
                            <a class="btn-custom" href="#">ادامه مطلب</a>
                            <div class="mb-sm-30"></div>
                        </div>
                        <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".5s">
                            <img src="{{ asset('front/images/misc/3.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-highlight" class="no-top"
                data-bgimage="url({{ asset('front/images/background/3b.png') }}) top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="text-center">
                                <h2><span class="uptitle id-color">خدمات ما</span>چه چیزهایی هستند؟</h2>
                                <div class="spacer-20"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row" dir="rtl">
                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay="0s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-laptop bg-color-2 text-light"></i>
                                <div class="fb-text">
                                    <h4>طراحی وب سایت</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".25s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-paper-plane-o bg-color-3 text-light"></i>
                                <div class="fb-text">
                                    <h4>ایمیل مارکتینگ</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".5s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-line-chart bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4>تجزیه و تحلیل دیجیتال</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay="0s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-object-group bg-color-2 text-light"></i>
                                <div class="fb-text">
                                    <h4>طراحی رابط کاربری</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".25s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-hdd-o bg-color-3 text-light"></i>
                                <div class="fb-text">
                                    <h4>پشتیبانی &amp; امنیت</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".5s">
                            <div class="f-box f-icon-left f-icon-rounded">
                                <i class="fa fa-comments-o bg-color text-light"></i>
                                <div class="fb-text">
                                    <h4>مشاوره فناوری اطلاعات</h4>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                        گرافیک</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- section begin -->
            <section id="section-pricing" class="no-top"
                data-bgimage="url({{ asset('front/images/background/3c.png') }}) top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="text-center">
                                <h2><span class="uptitle id-color">جدول قیمت گذاری</span>برنامه خود را انتخاب کنید</h2>
                                <div class="spacer-20"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <div class="switch-set">
                                <div>ماهانه</div>
                                <div><input id="sw-1" class="switch" type="checkbox" /></div>
                                <div>سالانه</div>
                                <div class="spacer-20"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item pricing" dir="rtl">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0s">
                                    <div class="pricing-s1 mb30">
                                        <div class="top">
                                            <h2>پایه</h2>
                                            <p class="plan-tagline">بهترین برای شخصی</p>
                                        </div>
                                        <div class="mid text-light bg-color">
                                            <p class="price">
                                                <span class="currency">تومان</span>
                                                <span class="m opt-1">559</span>
                                                <span class="y opt-2">800</span>
                                                <span class="month">سال/ماه</span>
                                            </p>
                                        </div>

                                        <div class="bottom">
                                            <ul>
                                                <li><i class="fa fa-check"></i>کمپین تنها</li>
                                                <li><i class="fa fa-check"></i>طراحی وب سایت</li>
                                                <li><i class="fa fa-check"></i>نظرسنجی مشتری</li>
                                                <li><i class="fa fa-check"></i>سوال &amp; کامنت</li>
                                                <li><i class="fa fa-check"></i>جستجوگر بک لینک</li>
                                                <li><i class="fa fa-check"></i>تحلیلگر کلمات کلیدی</li>
                                            </ul>
                                        </div>

                                        <div class="action">
                                            <a href="" class="btn-custom">ثبت نام کن</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".25s">
                                    <div class="pricing-s1 mb30">
                                        <div class="top">
                                            <h2>ویژه</h2>
                                            <p class="plan-tagline">بهترین برای شرکت</p>
                                        </div>

                                        <div class="mid text-light bg-color-2">
                                            <p class="price">
                                                <span class="currency">تومان</span>
                                                <span class="m opt-1">959</span>
                                                <span class="y opt-2">1,500</span>
                                                <span class="month">سال/ماه</span>
                                            </p>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><i class="fa fa-check"></i>کمپین دوتایی</li>
                                                <li><i class="fa fa-check"></i>طراحی وب سایت</li>
                                                <li><i class="fa fa-check"></i>نظرسنجی مشتری</li>
                                                <li><i class="fa fa-check"></i>سوال &amp; کامنت</li>
                                                <li><i class="fa fa-check"></i>جستجوگر بک لینک</li>
                                                <li><i class="fa fa-check"></i>تحلیلگر کلمات کلیدی</li>
                                            </ul>
                                        </div>

                                        <div class="action">
                                            <a href="" class="btn-custom">ثبت نام کن</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".75s">
                                    <div class="pricing-s1 mb30">
                                        <div class="top">
                                            <h2>کسب و کار</h2>
                                            <p class="plan-tagline">بهترین برای فروشگاه</p>
                                        </div>
                                        <div class="mid text-light bg-color-3">
                                            <p class="price">
                                                <span class="currency">تومان</span>
                                                <span class="m opt-1">2,499</span>
                                                <span class="y opt-2">3,100</span>
                                                <span class="month">سال/ماه</span>
                                            </p>
                                        </div>
                                        <div class="bottom">
                                            <ul>
                                                <li><i class="fa fa-check"></i>کمپین سه گانه</li>
                                                <li><i class="fa fa-check"></i>طراحی وب سایت</li>
                                                <li><i class="fa fa-check"></i>نظرسنجی مشتری</li>
                                                <li><i class="fa fa-check"></i>سوال &amp; کامنت</li>
                                                <li><i class="fa fa-check"></i>جستجوگر بک لینک</li>
                                                <li><i class="fa fa-check"></i>تحلیلگر کلمات کلیدی</li>
                                            </ul>
                                        </div>

                                        <div class="action">
                                            <a href="" class="btn-custom">ثبت نام کن</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section dir="rtl" id="section-text" class="no-top"
                data-bgimage="url({{ asset('front/images/background/3d.png') }}) top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                            <img class="relative img-fluid" src="{{ asset('front/images/misc/4.png') }}" alt="" />
                        </div>

                        <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                            <h2>تجربه ی آبی کسب و کار ها را برای درخشش آماده میکند</h2>
                            <p class="lead">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                                است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                                تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                                باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
                            </p>
                            <div class="spacer-half"></div>
                            <a class="btn-custom" href="#">شروع کنید</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="d-none d-lg-block" id="section-testimonial"
                data-bgimage="url({{ asset('front/images/background/2.png') }})  top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h2><span class="uptitle id-color">اعتمادسازی</span>آنچه مشتریان می گویند</h2>
                                <div class="spacer-20"></div>
                            </div>
                            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                                <div class="item col-lg-12">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/dg.jpg') }}" /> <span>دیجی
                                                    کالا</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/zh.jpg') }}" /> <span>ژاکت</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/7.png') }}" /> <span>سون لرن</span>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/hm.png') }}" />
                                                <span>همیارآکادمی</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/rtl.jpg') }}" /> <span>راست
                                                    چین</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/s.jpg') }}" /> <span>ایران
                                                    سرور</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/fara.png') }}" />
                                                <span>فرادرس</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="de_testi opt-2">
                                        <blockquote>
                                            <p>پشتیبانی بسیار عالی ، مثل اینکه قبلاً هرگز ندیده ام. با تشکر از تیم پشتیبانی
                                                ، آنها بسیار مفید هستند. این شرکت برای مشتریان بهترین راه حل را ارائه می دهد
                                                و در نهایت کار ما انجام شد
                                            </p>
                                            <div class="de_testi_by"><img alt="" class="rounded-circle"
                                                    src="{{ asset('front/images/team/ab.png') }}" /> <span>ابزار
                                                    وردپرس</span></div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section dir="rtl" data-bgimage="url({{ asset('front/images/background/7.png') }}) center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><span class="id-color">تماس بگیرید</span> برای اطلاعات بیشتر. خدمات مشتری Bluetec برای کمک
                                به شما اینجا است <span class="id-color">هر زمان</span>.</h2>
                            <p class="lead">ما 24 ساعت در دسترس هستیم!</p>
                        </div>

                        <div class="col-md-6 text-lg-center text-sm-center">
                            <div class="phone-num-big">
                                <i class="fa fa-phone id-color-2"></i>
                                <span class="pnb-text">
                                    تماس با ما
                                </span>
                                <span class="pnb-num">
                                    1 200 333 800
                                </span>
                            </div>
                            <a href="#" class="btn-custom capsule med">تماس باما</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    @endsection

</x-front.layouts.main>
