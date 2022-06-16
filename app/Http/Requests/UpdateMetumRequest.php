<?php

namespace App\Http\Requests;

use App\Models\Metum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMetumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('metum_edit');
    }

    public function rules()
    {
        return [
            'meta' => [
                'string',
                'required',
                'unique:meta,meta,' . request()->route('metum')->id,
            ],
        ];
    }
}
