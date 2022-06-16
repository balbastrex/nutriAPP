@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.usuario.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.usuarios.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nombre">{{ trans('cruds.usuario.fields.nombre') }}</label>
                <input class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                @if($errors->has('nombre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nombre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.nombre_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="apellidos">{{ trans('cruds.usuario.fields.apellidos') }}</label>
                <input class="form-control {{ $errors->has('apellidos') ? 'is-invalid' : '' }}" type="text" name="apellidos" id="apellidos" value="{{ old('apellidos', '') }}" required>
                @if($errors->has('apellidos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apellidos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.apellidos_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fecha_de_nacimiento">{{ trans('cruds.usuario.fields.fecha_de_nacimiento') }}</label>
                <input class="form-control date {{ $errors->has('fecha_de_nacimiento') ? 'is-invalid' : '' }}" type="text" name="fecha_de_nacimiento" id="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}" required>
                @if($errors->has('fecha_de_nacimiento'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fecha_de_nacimiento') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.fecha_de_nacimiento_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dni">{{ trans('cruds.usuario.fields.dni') }}</label>
                <input class="form-control {{ $errors->has('dni') ? 'is-invalid' : '' }}" type="text" name="dni" id="dni" value="{{ old('dni', '') }}" required>
                @if($errors->has('dni'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dni') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.dni_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="telefono">{{ trans('cruds.usuario.fields.telefono') }}</label>
                <input class="form-control {{ $errors->has('telefono') ? 'is-invalid' : '' }}" type="text" name="telefono" id="telefono" value="{{ old('telefono', '') }}" required>
                @if($errors->has('telefono'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telefono') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.telefono_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="direccion">{{ trans('cruds.usuario.fields.direccion') }}</label>
                <input class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" type="text" name="direccion" id="direccion" value="{{ old('direccion', '') }}">
                @if($errors->has('direccion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('direccion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.direccion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.usuario.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ocupacion">{{ trans('cruds.usuario.fields.ocupacion') }}</label>
                <input class="form-control {{ $errors->has('ocupacion') ? 'is-invalid' : '' }}" type="text" name="ocupacion" id="ocupacion" value="{{ old('ocupacion', '') }}">
                @if($errors->has('ocupacion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ocupacion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.ocupacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="turno_laboral">{{ trans('cruds.usuario.fields.turno_laboral') }}</label>
                <input class="form-control {{ $errors->has('turno_laboral') ? 'is-invalid' : '' }}" type="text" name="turno_laboral" id="turno_laboral" value="{{ old('turno_laboral', '') }}">
                @if($errors->has('turno_laboral'))
                    <div class="invalid-feedback">
                        {{ $errors->first('turno_laboral') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.turno_laboral_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contacto">{{ trans('cruds.usuario.fields.contacto') }}</label>
                <input class="form-control {{ $errors->has('contacto') ? 'is-invalid' : '' }}" type="text" name="contacto" id="contacto" value="{{ old('contacto', '') }}">
                @if($errors->has('contacto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contacto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.contacto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meta_id">{{ trans('cruds.usuario.fields.meta') }}</label>
                <select class="form-control select2 {{ $errors->has('meta') ? 'is-invalid' : '' }}" name="meta_id" id="meta_id">
                    @foreach($metas as $id => $entry)
                        <option value="{{ $id }}" {{ old('meta_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('meta'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.usuario.fields.meta_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection