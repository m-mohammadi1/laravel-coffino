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
                                ایجاد تعداد جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.counts.store') }}" method="post">
                            @csrf

                            <div class="card-body">


                                <x-dashboard.partials.error />



                                <div class="form-group">
                                    <label>تعداد سرويس</label>
                                    <input type="number" class="form-control" name="service_count" value="{{ old('service_count') }}"/>
                                </div>

                                <div class="form-group">
                                    <label>تعداد هديه</label>
                                    <input type="number" class="form-control" name="gift_count" value="{{ old('gift_count') }}"/>
                                </div>


                                
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                @can('create service')
                                    <button type="submit" class="btn btn-big btn-primary mr-2">ایجاد</button>
                                @else
                                    <button type="button" class="btn btn-big btn-primary mr-2 disabled">ایجاد</button>
                                @endcan
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
