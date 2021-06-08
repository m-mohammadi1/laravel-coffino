<x-dashboard.layouts.main>

    @section('content')



        <div class="container">
            <div class="row">

                <div class="col-md-6 mx-auto">


                    <div class="card card--custom">


                        <div class="card-header">
                            پرداخت موفقیت آمیز
                        </div>

                        <div class="card-body">

                            <div class="alert alert-success mb-5 p-5" role="alert">
                                <h4 class="alert-heading">خرید موفق</h4>
                                <p>سفارش شما ثبت شده و تیم پشتیبانی در حال بررسی آن هست</p>
                                <div class="border-bottom border-white opacity-20 mb-5"></div>
                                <p class="mb-0">
                                    @if ($success)
                                        {{ $success }}
                                    @endif
                                </p>
                            </div>


                        </div>


                    </div>


                </div>

            </div>
        </div>



    @endsection


</x-dashboard.layouts.main>
