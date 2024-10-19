<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlazaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $plazas = Plaza::paginate();

        return view('plaza.index', compact('plazas'))
            ->with('i', ($request->input('page', 1) - 1) * $plazas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $plaza = new Plaza();

        return view('plaza.create', compact('plaza'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlazaRequest $request): RedirectResponse
    {
        Plaza::create($request->validated());

        return Redirect::route('plazas.index')
            ->with('success', 'Plaza created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $plaza = Plaza::find($id);

        return view('plaza.show', compact('plaza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $plaza = Plaza::find($id);

        return view('plaza.edit', compact('plaza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlazaRequest $request, Plaza $plaza): RedirectResponse
    {
        $plaza->update($request->validated());

        return Redirect::route('plazas.index')
            ->with('success', 'Plaza updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Plaza::find($id)->delete();

        return Redirect::route('plazas.index')
            ->with('success', 'Plaza deleted successfully');
    }
}
