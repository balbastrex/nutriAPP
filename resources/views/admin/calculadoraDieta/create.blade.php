@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.calculadoraDietum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.calculadora-dieta.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="grgsrwg">{{ trans('cruds.calculadoraDietum.fields.grgsrwg') }}</label>
                <input class="form-control {{ $errors->has('grgsrwg') ? 'is-invalid' : '' }}" type="text" name="grgsrwg" id="grgsrwg" value="{{ old('grgsrwg', '') }}">
                @if($errors->has('grgsrwg'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grgsrwg') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.calculadoraDietum.fields.grgsrwg_helper') }}</span>
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