@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.calculadoraDietum.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calculadora-dieta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.calculadoraDietum.fields.id') }}
                        </th>
                        <td>
                            {{ $calculadoraDietum->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.calculadoraDietum.fields.grgsrwg') }}
                        </th>
                        <td>
                            {{ $calculadoraDietum->grgsrwg }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.calculadora-dieta.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection