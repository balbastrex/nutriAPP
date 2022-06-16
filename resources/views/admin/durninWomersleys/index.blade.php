@extends('layouts.admin')
@section('content')
@can('durnin_womersley_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.durnin-womersleys.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.durninWomersley.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.durninWomersley.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DurninWomersley">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.edad') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.peso') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.biceps') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.triceps') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.subescapular') }}
                        </th>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.suprailiaco') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($durninWomersleys as $key => $durninWomersley)
                        <tr data-entry-id="{{ $durninWomersley->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $durninWomersley->id ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\DurninWomersley::EDAD_RADIO[$durninWomersley->edad] ?? '' }}
                            </td>
                            <td>
                                {{ $durninWomersley->peso ?? '' }}
                            </td>
                            <td>
                                {{ $durninWomersley->biceps ?? '' }}
                            </td>
                            <td>
                                {{ $durninWomersley->triceps ?? '' }}
                            </td>
                            <td>
                                {{ $durninWomersley->subescapular ?? '' }}
                            </td>
                            <td>
                                {{ $durninWomersley->suprailiaco ?? '' }}
                            </td>
                            <td>
                                @can('durnin_womersley_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.durnin-womersleys.show', $durninWomersley->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('durnin_womersley_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.durnin-womersleys.edit', $durninWomersley->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('durnin_womersley_delete')
                                    <form action="{{ route('admin.durnin-womersleys.destroy', $durninWomersley->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('durnin_womersley_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.durnin-womersleys.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-DurninWomersley:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection