<x-dashboard.layouts.main>

    @section('title', 'كافينو  | ویرایش سرویس')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />
                    

                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ایجاد سرویس جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.counts.update', $count) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="card-body">


                                <x-dashboard.partials.error />



                                <div class="form-group">
                                    <label>تعداد سرويس</label>
                                    <input type="number" class="form-control" name="service_count" value="{{ $count->service_count }}"/>
                                </div>

                                <div class="form-group">
                                    <label>تعداد هديه</label>
                                    <input type="number" class="form-control" name="gift_count" value="{{ $count->gift_count }}"/>
                                </div>


                                
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-big btn-primary mr-2">ویرایش</button>
                                <a href="{{ route('dashboard.counts.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
