<x-dashboard.layouts.main>

@section('title', 'كافينو | پروفایل')

@section('content')


    <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::پروفایل اطلاعات شخصی-->
                <div class="d-flex flex-row">

                    <x-dashboard.pages.profile.panel-aside />

                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8">

                        <!--begin::Form-->
                        <form class="form" action="{{ route('dashboard.profile.update_password') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!--begin::Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Header-->
                                <div class="card-header py-3">
                                    <div class="card-title align-items-start flex-column">
                                        <h3 class="card-label font-weight-bolder text-dark">تغییر رمز عبور</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <button type="submit" class="btn btn-success mr-2">ذخیره تغییرات</button>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">

                                    <x-dashboard.partials.messages.error-bag :errorBag="'updatePassword'" />


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">پسورد فعلی</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                   type="password"
                                                   name="current_password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">پسورد جدید</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                   type="password"
                                                   name="password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">تایید پسورد</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control form-control-lg form-control-solid"
                                                   type="password"
                                                   name="password_confirmation">
                                        </div>
                                    </div>

                                </div>
                                <!--end::Body-->

                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                    <!--end::Content-->
                </div>
                <!--end::پروفایل اطلاعات شخصی-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

    @endsection


</x-dashboard.layouts.main>
