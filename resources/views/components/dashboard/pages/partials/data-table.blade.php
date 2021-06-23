<div
    class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
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

            @foreach($objectColumnNames as $column)

                <th class="datatable-cell datatable-cell-sort">
                    <span style="width: 137px;">{{ $column }}</span>
                </th>
            @endforeach

            <th class="datatable-cell datatable-cell-sort">
                عملیات
            </th>

        </tr>
        </thead>

        <tbody class="datatable-body" style="">
        @php($i = 0)
        @foreach ($iterator as $object)
            <tr data-row="{{ $i }}" class="datatable-row" style="left: 0px;">

                <td class="datatable-cell-sorted datatable-cell-center datatable-cell datatable-cell-check"
                    data-field="RecordID" aria-label="61"><span style="width: 20px;"><label
                            class="checkbox checkbox-single"><input type="checkbox"
                                                                    value="61">&nbsp;<span></span></label></span>
                </td>

                @for($x = 0; $x < $tableColumnsCount; $x++)

                    <td class="datatable-cell">
                        <span style="width: 137px;">{{ $object->{$columns[$x]} }}</span>
                    </td>

                @endfor

                {{ $slot }}

            </tr>



            @php($i++)
        @endforeach


        </tbody>
    </table>

    <div class="datatable-pager datatable-paging-loaded d-flex justify-content-between">

        @if ($isPaginated)
            {{ $iterator->links() }}

            <div class="datatable-pager-info">


                <div class="dropdown bootstrap-select datatable-pager-size"
                     style="width: 60px;">

                    <select class="selectpicker form-control" title="انتخاب اندازه صفحه"
                            data-width="120px" data-selected="20">
                        <option class="bs-title-option" value="">انتخاب</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <span class="datatable-pager-detail">نمایش 61 - 80 از 100</span>
            </div>
        @endif

    </div>

    <!--end: جدول داده ها-->
</div>
