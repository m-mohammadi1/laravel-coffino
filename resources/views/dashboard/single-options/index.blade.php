<x-dashboard.layouts.main>

    @section('title', 'كافينو  | ایجاد سرویس')


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

                            @foreach ($options as $option)

                                <form method="post" action="{{ route('dashboard.single-options.update', $option) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">{{  $option->title }}</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="{{ $option->name }}" value="{{ $option->value }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">عملیات</label>
                                        <div class="col-10">
                                            <button type="submit" class="btn btn-block btn-dark">بروزرسانی</button>
                                        </div>
                                    </div>
                                </form>
                                <hr />

                            @endforeach


                        </div>


                    </div>


                </div>

            </div>

        </div>



    @endsection


</x-dashboard.layouts.main>
