<?php

namespace App\Http\Requests;

use App\Models\CalculadoraDietum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCalculadoraDietumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('calculadora_dietum_create');
    }

    public function rules()
    {
        return [
            'grgsrwg' => [
                'string',
                'nullable',
            ],
        ];
    }
}
