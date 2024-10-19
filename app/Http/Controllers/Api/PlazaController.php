<?php

namespace App\Http\Controllers\Api;

use App\Models\Plaza;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PlazaRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\PlazaResource;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $plazas = Plaza::paginate();

        return PlazaResource::collection($plazas);
    }

    public function create(): View
    {
        $plaza = new Plaza();

        return view('plaza.create', compact('plaza'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlazaRequest $request): Plaza
    {
        return Plaza::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Plaza $plaza): Plaza
    {
        return $plaza;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlazaRequest $request, Plaza $plaza): Plaza
    {
        $plaza->update($request->validated());

        return $plaza;
    }

    public function destroy(Plaza $plaza): Response
    {
        $plaza->delete();

        return response()->noContent();
    }
}
