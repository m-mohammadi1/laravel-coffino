<x-dashboard.layouts.main>

    @section('title', 'بخش پشتیبانی')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-8 offset-md-2">


                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                ثبت تیکت جدید
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form action="{{ route('dashboard.customers.tickets.store') }}" method="post">
                            @csrf

                            <div class="card-body">

                                <x-dashboard.partials.messages.errors />

                                <div class="form-group">
                                    <label for="category">عنوان تیکت</label>
                                    <select class="form-control" name="category" id="category">

                                        @foreach($ticket_categories as $key => $text)
                                            <option value="{{ $key }}">{{ $text }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">عنوان تیکت</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="body">توضیحات</label>
                                    <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ old('body') }}</textarea>
                                </div>


                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-big btn-primary mr-2">ایجاد</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

        </div>


    @endsection


</x-dashboard.layouts.main>
