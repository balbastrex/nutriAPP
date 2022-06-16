<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUsuarioRequest;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Metum;
use App\Models\Usuario;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsuariosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('usuario_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuarios = Usuario::with(['meta'])->get();

        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        abort_if(Gate::denies('usuario_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $metas = Metum::pluck('meta', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.usuarios.create', compact('metas'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        $usuario = Usuario::create($request->all());

        return redirect()->route('admin.usuarios.index');
    }

    public function edit(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $metas = Metum::pluck('meta', 'id')->prepend(trans('global.pleaseSelect'), '');

        $usuario->load('meta');

        return view('admin.usuarios.edit', compact('metas', 'usuario'));
    }

    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->all());

        return redirect()->route('admin.usuarios.index');
    }

    public function show(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario->load('meta');

        return view('admin.usuarios.show', compact('usuario'));
    }

    public function destroy(Usuario $usuario)
    {
        abort_if(Gate::denies('usuario_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $usuario->delete();

        return back();
    }

    public function massDestroy(MassDestroyUsuarioRequest $request)
    {
        Usuario::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
