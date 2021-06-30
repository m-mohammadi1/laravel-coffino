<x-dashboard.layouts.main>

    @section('title', 'كافينو  | نظرات')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                تنظیمات سایت
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">

                            <form method="post" action="">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label">متن</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="کاله صنعتگر"
                                               id="example-text-input"/>
                                    </div>
                                </div>
                            </form>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">جستجو</label>
                                <div class="col-10">
                                    <input class="form-control" type="search" value="چگونه وب را تسخیر کنم"
                                           id="example-search-input"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">پست الکترونیک</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" value="bootstrap@example.com"
                                           id="example-email-input"/>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

            </div>

        </div>



    @endsection


</x-dashboard.layouts.main>
