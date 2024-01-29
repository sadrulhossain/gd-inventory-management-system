@if(!$list->isEmpty())

    <div class="row">
        <div class="col-md-10">
            {{ $list->appends(Request::all())->links() }}
            <?php
            $start = empty($list->total()) ? 0 : (($list->currentPage() - 1) * $list->perPage() + 1);
            $end = ($list->currentPage() * $list->perPage() > $list->total()) ? $list->total() : ($list->currentPage() * $list->perPage());
            ?> <br />
            @lang('label.SHOWING_START_TO_END_OF_TOTAL_RECORDS', [
                'start'     => $start,
                'end'       => $end,
                'total'     => $list->total(),
            ])
        </div>
        <div class="col-md-2" id="recordPerPageHolder">
            {!! Form::open(array('group' => 'form', 'url' => 'set-record-per-page', 'class' => '')) !!}
            <div class="input-group">
                {!! Form::select('record_per_page', get_per_page_record_list(), get_per_page_record(), [
                    'id' => 'recordPerPage', 'class' => 'form-select w-px-40'
                ]) !!}
                <button class="btn btn-primary" type="submit" id="pageRecordBtn">
                    <i class='bx bx-right-arrow-alt'></i>
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endif
