<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDurninWomersleyRequest;
use App\Http\Requests\StoreDurninWomersleyRequest;
use App\Http\Requests\UpdateDurninWomersleyRequest;
use App\Models\DurninWomersley;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DurninWomersleyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('durnin_womersley_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $durninWomersleys = DurninWomersley::all();

        return view('admin.durninWomersleys.index', compact('durninWomersleys'));
    }

    public function create()
    {
        abort_if(Gate::denies('durnin_womersley_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.durninWomersleys.create');
    }

    public function store(StoreDurninWomersleyRequest $request)
    {
        $durninWomersley = DurninWomersley::create($request->all());

        return redirect()->route('admin.durnin-womersleys.index');
    }

    public function edit(DurninWomersley $durninWomersley)
    {
        abort_if(Gate::denies('durnin_womersley_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.durninWomersleys.edit', compact('durninWomersley'));
    }

    public function update(UpdateDurninWomersleyRequest $request, DurninWomersley $durninWomersley)
    {
        $durninWomersley->update($request->all());

        return redirect()->route('admin.durnin-womersleys.index');
    }

    public function show(DurninWomersley $durninWomersley)
    {
        abort_if(Gate::denies('durnin_womersley_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.durninWomersleys.show', compact('durninWomersley'));
    }

    public function destroy(DurninWomersley $durninWomersley)
    {
        abort_if(Gate::denies('durnin_womersley_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $durninWomersley->delete();

        return back();
    }

    public function massDestroy(MassDestroyDurninWomersleyRequest $request)
    {
        DurninWomersley::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
