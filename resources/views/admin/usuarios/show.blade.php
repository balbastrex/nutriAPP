@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.usuario.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.usuarios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.id') }}
                        </th>
                        <td>
                            {{ $usuario->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.nombre') }}
                        </th>
                        <td>
                            {{ $usuario->nombre }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.apellidos') }}
                        </th>
                        <td>
                            {{ $usuario->apellidos }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.fecha_de_nacimiento') }}
                        </th>
                        <td>
                            {{ $usuario->fecha_de_nacimiento }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.dni') }}
                        </th>
                        <td>
                            {{ $usuario->dni }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.telefono') }}
                        </th>
                        <td>
                            {{ $usuario->telefono }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.direccion') }}
                        </th>
                        <td>
                            {{ $usuario->direccion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.email') }}
                        </th>
                        <td>
                            {{ $usuario->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.ocupacion') }}
                        </th>
                        <td>
                            {{ $usuario->ocupacion }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.turno_laboral') }}
                        </th>
                        <td>
                            {{ $usuario->turno_laboral }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.contacto') }}
                        </th>
                        <td>
                            {{ $usuario->contacto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.usuario.fields.meta') }}
                        </th>
                        <td>
                            {{ $usuario->meta->meta ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.usuarios.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection