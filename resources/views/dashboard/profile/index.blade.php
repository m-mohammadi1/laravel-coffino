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
                        <form class="form" action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!--begin::Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Header-->
                                <div class="card-header py-3">
                                    <div class="card-title align-items-start flex-column">
                                        <h3 class="card-label font-weight-bolder text-dark">اطلاعات شخصی</h3>
                                        <span class="text-muted font-weight-bold font-size-sm mt-1">اطلاعات شخصی خود را به روز کنید</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button type="submit" class="btn btn-success mr-2">ذخیره تغییرات</button>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body">


                                    <x-dashboard.partials.messages.error-bag :errorBag="'updateProfileInformation'" />


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">آواتار</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="image-input image-input-outline" id="kt_profile_avatar"
                                                 style="background-image: url({{ asset('assets/media/users/blank.png') }})">
                                                <div class="image-input-wrapper"
                                                     style="background-image: url({{ asset(auth()->user()->avatar) }}"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="تغییر آواتار">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="profile_avatar_remove">
                                                </label>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="cancel" data-toggle="tooltip" title=""
                                                    data-original-title="لغو avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="remove" data-toggle="tooltip" title=""
                                                    data-original-title="حذف آواتار">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                            </div>
                                            <span
                                                class="form-text text-muted">همهowed file types:  png, jpg, jpeg.</span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">نام</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                   name="name"
                                                   value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">تلفن</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-phone"></i></span></div>
                                                <input type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       value="0000" placeholder="تلفن">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label text-right">نشانی پست
                                            الکترونیکی</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="la la-at"></i></span></div>
                                                <input type="text" name="email"
                                                       class="form-control form-control-lg form-control-solid"
                                                       value="{{ auth()->user()->email }}" placeholder="پست الکترونیک">
                                            </div>
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
