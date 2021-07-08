<x-dashboard.layouts.main>

    @section('title', 'پشتیبانی')

    @section('headers')
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endsection


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">


                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Ticket title
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            Ticket Body
                        </div>


                    </div>

                </div>

            </div>

            <div class="container">
                <div class="d-flex flex-row mb-4">

                    <div class="col-md-8 offset-md-2">
                        <!--begin::Content-->
                        <div class="flex-row-fluid ml-lg-8" id="">
                            <!--begin::Card-->
                            <div id="chat"></div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>

                </div>

            </div>


            @endsection


    @section('scripts')

        <script src="js/app.js"></script>

        <script>
            const chatDiv = document.getElementById("chatDiv");
            chatDiv.scrollTop = chatDiv.scrollHeight;
        </script>

        <x-dashboard.partials.messages.toastr-error-bag :errorBag="'toastrErrorBag'"/>
    @endsection

</x-dashboard.layouts.main>
