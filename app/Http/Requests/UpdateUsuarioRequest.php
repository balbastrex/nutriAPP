<?php

namespace App\Http\Requests;

use App\Models\Usuario;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('usuario_edit');
    }

    public function rules()
    {
        return [
            'nombre' => [
                'string',
                'required',
            ],
            'apellidos' => [
                'string',
                'required',
            ],
            'fecha_de_nacimiento' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'dni' => [
                'string',
                'required',
                'unique:usuarios,dni,' . request()->route('usuario')->id,
            ],
            'telefono' => [
                'string',
                'min:9',
                'max:9',
                'required',
                'unique:usuarios,telefono,' . request()->route('usuario')->id,
            ],
            'direccion' => [
                'string',
                'nullable',
            ],
            'email' => [
                'required',
                'unique:usuarios,email,' . request()->route('usuario')->id,
            ],
            'ocupacion' => [
                'string',
                'nullable',
            ],
            'turno_laboral' => [
                'string',
                'nullable',
            ],
            'contacto' => [
                'string',
                'nullable',
            ],
        ];
    }
}
