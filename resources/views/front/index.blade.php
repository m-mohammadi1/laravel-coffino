<x-front.layouts.main>


    @section('content')

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <x-front.partials.landing />

            <x.front.partials.highlight />

            <!-- section begin -->
{{--            <x-front.partials.pricing />--}}
            <!-- section close -->

{{--            <x-front.partials.section-text />--}}

            <x-front.partials.comments :comments="$comments" />

            <x-front.partials.contact-us />

        </div>


    @endsection

</x-front.layouts.main>
