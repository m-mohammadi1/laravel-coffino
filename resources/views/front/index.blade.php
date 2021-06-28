<x-front.layouts.main>

    @section('content')

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            @include('front.partials.landing')


            @include('front.partials.highlight')

            <!-- section begin -->
            @include('front.partials.pricing')
            <!-- section close -->

            @include('front.partials.section-text')

            @include('front.partials.comments')


            @include('front.partials.contact-us')

        </div>


    @endsection

</x-front.layouts.main>
