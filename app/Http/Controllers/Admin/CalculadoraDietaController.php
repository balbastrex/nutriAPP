<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCalculadoraDietumRequest;
use App\Http\Requests\StoreCalculadoraDietumRequest;
use App\Http\Requests\UpdateCalculadoraDietumRequest;
use App\Models\CalculadoraDietum;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculadoraDietaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('calculadora_dietum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calculadoraDieta = CalculadoraDietum::all();

        return view('admin.calculadoraDieta.index', compact('calculadoraDieta'));
    }

    public function create()
    {
        abort_if(Gate::denies('calculadora_dietum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calculadoraDieta.create');
    }

    public function store(StoreCalculadoraDietumRequest $request)
    {
        $calculadoraDietum = CalculadoraDietum::create($request->all());

        return redirect()->route('admin.calculadora-dieta.index');
    }

    public function edit(CalculadoraDietum $calculadoraDietum)
    {
        abort_if(Gate::denies('calculadora_dietum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calculadoraDieta.edit', compact('calculadoraDietum'));
    }

    public function update(UpdateCalculadoraDietumRequest $request, CalculadoraDietum $calculadoraDietum)
    {
        $calculadoraDietum->update($request->all());

        return redirect()->route('admin.calculadora-dieta.index');
    }

    public function show(CalculadoraDietum $calculadoraDietum)
    {
        abort_if(Gate::denies('calculadora_dietum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.calculadoraDieta.show', compact('calculadoraDietum'));
    }

    public function destroy(CalculadoraDietum $calculadoraDietum)
    {
        abort_if(Gate::denies('calculadora_dietum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $calculadoraDietum->delete();

        return back();
    }

    public function massDestroy(MassDestroyCalculadoraDietumRequest $request)
    {
        CalculadoraDietum::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
