@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.durninWomersley.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.durnin-womersleys.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.id') }}
                        </th>
                        <td>
                            {{ $durninWomersley->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.edad') }}
                        </th>
                        <td>
                            {{ App\Models\DurninWomersley::EDAD_RADIO[$durninWomersley->edad] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.peso') }}
                        </th>
                        <td>
                            {{ $durninWomersley->peso }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.biceps') }}
                        </th>
                        <td>
                            {{ $durninWomersley->biceps }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.triceps') }}
                        </th>
                        <td>
                            {{ $durninWomersley->triceps }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.subescapular') }}
                        </th>
                        <td>
                            {{ $durninWomersley->subescapular }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.durninWomersley.fields.suprailiaco') }}
                        </th>
                        <td>
                            {{ $durninWomersley->suprailiaco }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.durnin-womersleys.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection