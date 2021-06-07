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
                                ويرايش تعداد سرويس با آيدي {{ $count->id }}
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
                                @can('edit count')
                                    <button type="submit" class="btn btn-big btn-primary mr-2">ویرایش</button>
                                @else
                                    <button type="button" class="btn btn-big btn-primary mr-2 disabled">ویرایش</button>
                                @endcan
                                <a href="{{ route('dashboard.counts.index') }}" class="btn btn-secondary">لغو</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>


                </div>

            </div>

            <div class="row mt-10">
                <div class="col-md-8 offset-md-2">

                    <div class="card card-custom">

                        <div class="card-header">
                            <h3 class="card-title">
                                سرويس هاي ثبت شده با اين تعداد
                            </h3>
                        </div>

                        <div class="card-body">

                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block;">
                                    <thead class="datatable-head">
                                        <tr class="datatable-row" style="left: 0px;">
                                            <th data-field="RecordID"
                                                class="datatable-cell-center datatable-cell datatable-cell-check">
                                                <span style="width: 20px;"><label
                                                        class="checkbox checkbox-single checkbox-all"><input
                                                            type="checkbox">&nbsp;<span></span></label></span>
                                            </th>
                                            <th data-field="ID" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">آیدی</span>
                                            </th>

                                            <th data-field="Title" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 137px;">عنوان سرويس</span>
                                            </th>

                                            <th data-field="Actions" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 125px;">عملیات</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                        @php($i = 0)
                                            @forelse ($services as $service)
                                                <tr data-row="{{ $i }}" class="datatable-row" style="left: 0px;">

                                                    <td  style="width: 20px;" class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                                                        data-field="RecordID">
                                                        <span style="width: 20px;">
                                                            <label class="checkbox checkbox-single">
                                                                <input type="checkbox" value="61">&nbsp;
                                                                <span></span>
                                                                </label>
                                                            </span>
                                                        </td>

                                                    <td data-field="ID" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->id }}</span>
                                                    </td>

                                                    <td data-field="Title" class="datatable-cell">
                                                        <span style="width: 137px;">{{ $service->title }}</span>
                                                    </td>


                                                    <td data-field="Actions"  style="width: 137px;">to do..</td>
                                                   

                                                    
                                                </tr>
                                                @php($i++)
                                            @empty
                                            <tr>

                                                <td colspan="4">

                                                    
                                                    <div class="text-center">
                                                        چیزی ثبت نشده است
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforelse



                                            </tbody>
                                        </table>

                                        
                                    </div>
                                    <!--end: جدول داده ها-->
                           

                        </div>

                        <div class="card-footer d-flex justify-content-between">

                        
                                {{ $services->links() }}
                               
                            

                        </div>

                    </div>

                </div>
            </div>

        </div>



    @endsection



</x-dashboard.layouts.main>
