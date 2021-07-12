<x-dashboard.layouts.main>

    @section('title', 'ارسال پیام برای کاربران')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ارسال پیام برای کاربران
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.notifications.store') }}" method="post">
                            @csrf

                            <div class="card-body">

                                <x-dashboard.partials.error />


                                <div class="form-group">
                                    <label>عنوان پیام</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
                                </div>

                                <div class="form-group">
                                    <label>متن پیام</label>
                                    <textarea name="message" class="form-control" cols="30" rows="10">{{ old('message') }}</textarea>
                                </div>

                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-block btn-hover-text-secondary btn-primary mr-2">ارسال</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
