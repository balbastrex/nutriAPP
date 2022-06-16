<?php

namespace App\Http\Requests;

use App\Models\DurninWomersley;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDurninWomersleyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('durnin_womersley_edit');
    }

    public function rules()
    {
        return [
            'edad' => [
                'required',
            ],
            'peso' => [
                'string',
                'required',
            ],
            'biceps' => [
                'string',
                'required',
            ],
            'triceps' => [
                'string',
                'required',
            ],
            'subescapular' => [
                'string',
                'required',
            ],
            'suprailiaco' => [
                'string',
                'required',
            ],
        ];
    }
}
