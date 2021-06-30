<x-dashboard.layouts.main>

    @section('title', ' مديريت نظرات ثبت شده')

    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <x-dashboard.partials.messages.success />
                    <x-dashboard.partials.messages.error />


                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">
                                    نظرات ثبت شده
                                </h3>
                            </div>


                        </div>
                        <div class="card-body">
                            <!--begin: جدول داده ها-->
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                 id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block;">
                                    <thead class="datatable-head">
                                    <tr class="datatable-row" style="left: 0px;">
                                        <th class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">آیدی</span>
                                        </th>

                                        <th data-field="Title" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">کاربر ثبت کرده</span>
                                        </th>

                                        <th data-field="Cat" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">متن نظر</span>
                                        </th>

                                        <th data-field="Cat" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">وضعیت</span>
                                        </th>



                                        <th data-field="Actions" data-autohide-disabled="false"
                                            class="datatable-cell datatable-cell-sort"><span
                                                style="width: 125px;">عملیات</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                    @php($i = 0)
                                    @foreach ($comments as $comment)
                                        <tr data-row="{{ $i }}" class="datatable-row" style="left: 0px;">
                                            <td class="datatable-cell">
                                                <span style="width: 137px;">{{ $comment->id }}</span>
                                            </td>

                                            <td  class="datatable-cell">
                                                <span style="width: 137px;">{{ $comment->user->name }}</span>
                                            </td>

                                            <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                <span style="width: 137px;">{{ $comment->value }}</span>
                                            </td>

                                            <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                <span style="width: 137px;">
                                                        <a href="javascript:;"
                                                           class="btn btn-{{ $comment->status != 0 ? 'primary' : 'warning' }}"
                                                           title="تغییر وضعیت"
                                                           onclick="document.getElementById('updateStatus').submit();"
                                                        >
                                                            {{ $comment->getStatusText() }}
                                                        </a>
                                                </span>
                                            </td>

                                            <form id="updateStatus" action="{{ route('dashboard.comments.update', $comment) }}"
                                                  method="post">
                                                @csrf
                                                @method('PUT')
                                            </form>

                                            <td data-field="Actions" data-autohide-disabled="false" aria-label="null"
                                                class="datatable-cell">
                                                        <span style="overflow: visible; position: relative; width: 125px;">

{{--                                                            @can('delete count')--}}
                                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon entityDeleteButton"
                                                                   title="حذف" data-id="{{ $comment->id }}">
                                                                    <span class="svg-icon svg-icon-md">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                               fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                                <path
                                                                                    d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                                                <path
                                                                                    d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                    fill="#000000" opacity="0.3"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                </a>
{{--                                                            @endcan--}}


                                                        </span>
                                            </td>
                                        </tr>

                                        <form class="deleteEntityForm" id="ID-{{ $comment->id }}"
                                              action="{{ route('dashboard.counts.destroy', $comment) }}"
                                              method="post">

                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        @php($i++)
                                    @endforeach



                                    </tbody>
                                </table>

                                <div class="datatable-pager datatable-paging-loaded">
                                    {{ $comments->links() }}
                                </div>
                            </div>
                            <!--end: جدول داده ها-->
                        </div>
                    </div>

                </div>

            </div>

        </div>



        <!-- مودال-->
        <div class="modal fade" id="deleteEntityModal" data-backdrop="static" tabindex="-1" role="dialog"
             aria-labelledby="none" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تایید حذف</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="نزدیک">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        حذف نظر شماره
                        <span id="deletingEntityId">0</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal">لغو</button>
                        <button type="button" id="confirmDeleteEntity"
                                class="btn btn-danger font-weight-bold">حذف</button>
                    </div>
                </div>
            </div>
        </div>







    @endsection


    @section('scripts')

        <script>
            $(document).ready(function() {
                $(".entityDeleteButton").click(function() {
                    const button = $(this);
                    const entityID = button.attr('data-id');


                    // show category id in modal
                    $("#deletingEntityId").html(entityID);
                    // show modal
                    $('#deleteEntityModal').modal('show');

                    // delete category when modal confrimed
                    $("#confirmDeleteEntity").click(function() {
                        const form = $("#ID-" + entityID);
                        form.submit();
                    });
                });
            });
        </script>



        <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
        <!--end::Page Scripts-->
    @endsection

</x-dashboard.layouts.main>
