@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.durninWomersley.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.durnin-womersleys.update", [$durninWomersley->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.durninWomersley.fields.edad') }}</label>
                @foreach(App\Models\DurninWomersley::EDAD_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('edad') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="edad_{{ $key }}" name="edad" value="{{ $key }}" {{ old('edad', $durninWomersley->edad) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="edad_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('edad'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edad') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.edad_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="peso">{{ trans('cruds.durninWomersley.fields.peso') }}</label>
                <input class="form-control {{ $errors->has('peso') ? 'is-invalid' : '' }}" type="text" name="peso" id="peso" value="{{ old('peso', $durninWomersley->peso) }}" required>
                @if($errors->has('peso'))
                    <div class="invalid-feedback">
                        {{ $errors->first('peso') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.peso_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="biceps">{{ trans('cruds.durninWomersley.fields.biceps') }}</label>
                <input class="form-control {{ $errors->has('biceps') ? 'is-invalid' : '' }}" type="text" name="biceps" id="biceps" value="{{ old('biceps', $durninWomersley->biceps) }}" required>
                @if($errors->has('biceps'))
                    <div class="invalid-feedback">
                        {{ $errors->first('biceps') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.biceps_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="triceps">{{ trans('cruds.durninWomersley.fields.triceps') }}</label>
                <input class="form-control {{ $errors->has('triceps') ? 'is-invalid' : '' }}" type="text" name="triceps" id="triceps" value="{{ old('triceps', $durninWomersley->triceps) }}" required>
                @if($errors->has('triceps'))
                    <div class="invalid-feedback">
                        {{ $errors->first('triceps') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.triceps_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="subescapular">{{ trans('cruds.durninWomersley.fields.subescapular') }}</label>
                <input class="form-control {{ $errors->has('subescapular') ? 'is-invalid' : '' }}" type="text" name="subescapular" id="subescapular" value="{{ old('subescapular', $durninWomersley->subescapular) }}" required>
                @if($errors->has('subescapular'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subescapular') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.subescapular_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="suprailiaco">{{ trans('cruds.durninWomersley.fields.suprailiaco') }}</label>
                <input class="form-control {{ $errors->has('suprailiaco') ? 'is-invalid' : '' }}" type="text" name="suprailiaco" id="suprailiaco" value="{{ old('suprailiaco', $durninWomersley->suprailiaco) }}" required>
                @if($errors->has('suprailiaco'))
                    <div class="invalid-feedback">
                        {{ $errors->first('suprailiaco') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.durninWomersley.fields.suprailiaco_helper') }}</span>
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