<x-dashboard.layouts.main>

    @section('title', 'بخش پشتیبانی')


    @section('content')

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <x-dashboard.partials.messages.success/>
                    <x-dashboard.partials.messages.error/>


                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">
                                    پیام های پشتیبانی من
                                </h3>
                            </div>

                        </div>
                        <div class="card-body">

                            <div class="mb-7">
                                <div class="row align-items-center">

                                </div>
                            </div>

                            <!--begin: جدو داده ها-->
                            <div
                                class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block;overflow: auto;">
                                    <thead class="datatable-head">
                                    <tr class="datatable-row" style="left: 0px;">

                                        <th data-field="ID" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">آیدی</span>
                                        </th>

                                        <th data-field="Title" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">عنوان</span>
                                        </th>

                                        <th data-field="Title" class="datatable-cell datatable-cell-sort">
                                            <span style="width: 137px;">پاسخ دهی</span>
                                        </th>

                                        <th data-field="Actions" data-autohide-disabled="false"

                                    </tr>
                                    </thead>
                                    <tbody class="datatable-body" style="">
                                    @foreach ($tickets as $ticket)
                                        <tr data-row="{{ $loop->index }}" class="datatable-row" style="left: 0px;">
                                            <td data-field="ID" aria-label="0363-0198" class="datatable-cell">
                                                <span style="width: 137px;">{{ $ticket->id }}</span>
                                            </td>

                                            <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                <span style="width: 137px;">{{ $ticket->title }}</span>
                                            </td>

                                            <td data-field="Title" aria-label="Philippines" class="datatable-cell">
                                                    <span style="width: 137px;">
                                                        @if($ticket->status == $ticket::STATUS['open'])
                                                        <a href="{{ route('dashboard.customers.tickets.show', $ticket->id) }}"
                                                           class="btn btn-primary">مشاهده</a>
                                                        @elseif (1)
                                                            <a href="{{ route('dashboard.customers.tickets.show', $ticket->id) }}"
                                                               class="btn btn-danger">بسته</a>
                                                        @endif
                                                    </span>
                                            </td>

                                        </tr>


                                    @endforeach

                                    </tbody>
                                </table>

                                <div class="datatable-pager datatable-paging-loaded">
                                    {{ $tickets->links() }}
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
                        از حذف آیتم با آیدی
                        <span id="deletingEntityId">0</span>
                        اطمینان دارید؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal">لغو
                        </button>
                        <button type="button" id="confirmDeleteEntity"
                                class="btn btn-danger font-weight-bold">حذف
                        </button>
                    </div>
                </div>
            </div>
        </div>







    @endsection


    @section('scripts')
    <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/js/pages/crud/ktdatatable/base/data-local.js?v=7.0.6') }}"></script>
        <!--end::Page Scripts-->
    @endsection

</x-dashboard.layouts.main>
