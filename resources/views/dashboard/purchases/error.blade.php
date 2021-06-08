<x-dashboard.layouts.main>

    @section('content')



        <div class="container">
            <div class="row">

                <div class="col-md-6 mx-auto">


                    <div class="card card--custom">


                        <div class="card-header">
                            خطلا در عملیات پرداخت
                        </div>

                        <div class="card-body">

                            <div class="alert alert-danger mb-5 p-5" role="alert">
                                <h4 class="alert-heading">خرید ناموفق</h4>
                                <p>عملیات پرداخت با خطا مواجه شده است لطفا دوباره امتحان کنید در غیر این صورت به پشتیبانی پیام دهید</p>
                                <div class="border-bottom border-white opacity-20 mb-5"></div>
                                <p class="mb-0">
                                    @if ($error)
                                        {{ $error }}
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
