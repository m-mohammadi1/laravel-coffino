<x-dashboard.layouts.main>

    @section('title', 'كافينو  | افزودن سوال متداول')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success/>
                    <x-dashboard.partials.messages.error/>


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ثبت نظر در مورد خدمات ما
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.customers.create_comment') }}" method="post">
                            @csrf

                            <div class="card-body">


                                <x-dashboard.partials.error/>


                                <div class="form-group">
                                    <label>نظر شما</label>
                                    <textarea class="form-control" rows="10" cols="30" name="value" placeholder="نظر شما در سایت به نمایش گذاشته خواهد شد">{{ old('value') }}</textarea>
                                </div>


                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                    <button type="submit" class="btn btn-block btn-info btn-hover-primary mr-2">ثبت نظر</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
