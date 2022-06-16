<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDurninWomersleyRequest;
use App\Http\Requests\UpdateDurninWomersleyRequest;
use App\Http\Resources\Admin\DurninWomersleyResource;
use App\Models\DurninWomersley;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DurninWomersleyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('durnin_womersley_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DurninWomersleyResource(DurninWomersley::all());
    }

    public function store(StoreDurninWomersleyRequest $request)
    {
        $durninWomersley = DurninWomersley::create($request->all());

        return (new DurninWomersleyResource($durninWomersley))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(DurninWomersley $durninWomersley)
    {
        abort_if(Gate::denies('durnin_womersley_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new DurninWomersleyResource($durninWomersley);
    }

    public function update(UpdateDurninWomersleyRequest $request, DurninWomersley $durninWomersley)
    {
        $durninWomersley->update($request->all());

        return (new DurninWomersleyResource($durninWomersley))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(DurninWomersley $durninWomersley)
    {
        abort_if(Gate::denies('durnin_womersley_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $durninWomersley->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
