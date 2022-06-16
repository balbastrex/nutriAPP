<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNuevoUsuarioRequest;
use App\Http\Requests\StoreNuevoUsuarioRequest;
use App\Http\Requests\UpdateNuevoUsuarioRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NuevoUsuarioController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('nuevo_usuario_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nuevoUsuarios.index');
    }

    public function create()
    {
        abort_if(Gate::denies('nuevo_usuario_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nuevoUsuarios.create');
    }

    public function store(StoreNuevoUsuarioRequest $request)
    {
        $nuevoUsuario = NuevoUsuario::create($request->all());

        return redirect()->route('admin.nuevo-usuarios.index');
    }

    public function edit(NuevoUsuario $nuevoUsuario)
    {
        abort_if(Gate::denies('nuevo_usuario_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nuevoUsuarios.edit', compact('nuevoUsuario'));
    }

    public function update(UpdateNuevoUsuarioRequest $request, NuevoUsuario $nuevoUsuario)
    {
        $nuevoUsuario->update($request->all());

        return redirect()->route('admin.nuevo-usuarios.index');
    }

    public function show(NuevoUsuario $nuevoUsuario)
    {
        abort_if(Gate::denies('nuevo_usuario_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.nuevoUsuarios.show', compact('nuevoUsuario'));
    }

    public function destroy(NuevoUsuario $nuevoUsuario)
    {
        abort_if(Gate::denies('nuevo_usuario_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $nuevoUsuario->delete();

        return back();
    }

    public function massDestroy(MassDestroyNuevoUsuarioRequest $request)
    {
        NuevoUsuario::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
