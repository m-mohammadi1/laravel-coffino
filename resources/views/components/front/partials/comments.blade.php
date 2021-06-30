<section class="d-none d-lg-block" id="section-testimonial"
         data-bgimage="url({{ asset('front/images/background/2.png') }}) top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2><span class="uptitle id-color">اعتمادسازی</span>آنچه مشتریان می گویند</h2>
                    <div class="spacer-20"></div>
                </div>
                <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                    @foreach($comments as $comment)
                        <div class="item col-lg-12" style="height: 100% !important;">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>
                                        {{ $comment->getCommentText() }}
                                    </p>
                                    <div class="de_testi_by">
                                        <img alt="" class="rounded-circle" src="{{ $comment->user->avatar }}"/>
                                        <span>{{ $comment->user->name }}</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
