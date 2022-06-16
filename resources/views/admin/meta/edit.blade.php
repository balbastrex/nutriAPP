@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.metum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.meta.update", [$metum->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="meta">{{ trans('cruds.metum.fields.meta') }}</label>
                <input class="form-control {{ $errors->has('meta') ? 'is-invalid' : '' }}" type="text" name="meta" id="meta" value="{{ old('meta', $metum->meta) }}" required>
                @if($errors->has('meta'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meta') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.metum.fields.meta_helper') }}</span>
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