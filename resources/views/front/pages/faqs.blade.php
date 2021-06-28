<x-front.layouts.main>

@section('content')


    <!-- content begin -->
        <div class="no-bottom no-top" id="content" style="background-size: cover;">
            <div id="top" style="background-size: cover;"></div>

            <!-- section begin -->
            <section id="subheader" data-bgimage="url(front/images/background/5.png) bottom"
                     style="background: url({{ asset('front/images/background/5.png') }}) center bottom / cover;">
                <div class="center-y relative text-center" data-scroll-speed="4"
                     style="background-size: cover; transform: translateY(150px);">
                    <div class="container" style="background-size: cover;">
                        <div class="row" style="background-size: cover;">
                            <div class="col-md-8 offset-md-2" style="background-size: cover;">
                                <form action="blank.php" class="row" id="form_subscribe" method="post"
                                      name="myForm">
                                    <div class="col-md-12 text-center" style="background-size: cover;">
                                        <h1>سوالات متداول</h1>
                                        <p>هر آنچیز که باید شما آن را بدانید</p>
                                    </div>
                                    <div class="clearfix" style="background-size: cover;"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section class="no-top relative pos-top" style="background-size: cover;">
                <div class="container" style="background-size: cover;">
                    <div dir="rtl" class="row" style="background-size: cover;">

                        <div class="col-md-12" style="background-size: cover;">
                            <!-- Accordion -->
                            <div id="accordion-1" class="accordion accordion-style-1"
                                 style="background-size: cover;">

                                @forelse($faqs as $faq)

                                    <div class="card" style="background-size: cover;">
                                        <div id="heading-a1" class="card-header bg-white shadow-sm border-0"
                                             style="background-size: cover;">
                                            <h6 class="mb-0 font-weight-bold">
                                                <a href="#" data-toggle="collapse"
                                                   data-target="#collapse-a{{ $faq->id }}"
                                                   aria-expanded="false"
                                                   aria-controls="collapse-a{{ $faq->id }}"
                                                   class="d-block position-relative text-dark collapsible-link py-2">
                                                    {{ $faq->title }}
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-a{{ $faq->id }}" aria-labelledby="heading-a{{ $faq->id }}" data-parent="#accordion-1"
                                             class="collapse" style="background-size: cover;">
                                            <div class="card-body p-4" style="background-size: cover;">
                                                {!!  $faq->description  !!}
                                            </div>
                                        </div>
                                    </div>


                                @empty

                                @endforelse

                            </div>
                        </div>


                    </div>

                </div>
            </section>
        </div>
        <!-- section close -->


    @endsection

</x-front.layouts.main>
