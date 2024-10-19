<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DeptoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DeptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $deptos = Depto::paginate();

        return view('depto.index', compact('deptos'))
            ->with('i', ($request->input('page', 1) - 1) * $deptos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $depto = new Depto();

        return view('depto.create', compact('depto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeptoRequest $request): RedirectResponse
    {
        Depto::create($request->validated());

        return Redirect::route('deptos.index')
            ->with('success', 'Depto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $depto = Depto::find($id);

        return view('depto.show', compact('depto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $depto = Depto::find($id);

        return view('depto.edit', compact('depto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeptoRequest $request, Depto $depto): RedirectResponse
    {
        $depto->update($request->validated());

        return Redirect::route('deptos.index')
            ->with('success', 'Depto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Depto::find($id)->delete();

        return Redirect::route('deptos.index')
            ->with('success', 'Depto deleted successfully');
    }
}
