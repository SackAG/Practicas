<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Reticula;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ReticulaRequest;
use Illuminate\Support\Facades\Redirect;

class ReticulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $reticulas = Reticula::paginate();

        return view('reticula.index', compact('reticulas'))
            ->with('i', ($request->input('page', 1) - 1) * $reticulas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reticula = new Reticula();
        $carrera = Carrera::pluck('id','Nombrecarrera');
        return view('reticula.create', compact('reticula','carrera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReticulaRequest $request): RedirectResponse
    {
        Reticula::create($request->validated());

        return Redirect::route('reticulas.index')
            ->with('success', 'Reticula created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $reticula = Reticula::find($id);

        return view('reticula.show', compact('reticula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $reticula = Reticula::find($id);
        $carrera = Carrera::pluck('id','Nombrecarrera');
        return view('reticula.edit', compact('reticula','carrera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReticulaRequest $request, Reticula $reticula): RedirectResponse
    {
        $reticula->update($request->validated());

        return Redirect::route('reticulas.index')
            ->with('success', 'Reticula updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reticula::find($id)->delete();

        return Redirect::route('reticulas.index')
            ->with('success', 'Reticula deleted successfully');
    }
}
