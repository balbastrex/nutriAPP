<?php

namespace App\Http\Requests;

use App\Models\Usuario;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUsuarioRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('usuario_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:usuarios,id',
        ];
    }
}
