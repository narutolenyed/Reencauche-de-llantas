<?php

namespace App\Http\Controllers;

use App\Models\Llanta;
use Illuminate\Http\Request;

class LlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llantas = Llanta::all();
        return view('llantas.index', compact('llantas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('llantas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Llanta::create([
        'cliente' => $request->cliente,
        'telefono' => $request->telefono,
        'tipo_llanta' => $request->tipo_llanta,
        'precio' => $request->precio,
        'estado' => $request->estado,
        'fecha_ingreso' => $request->fecha_ingreso,
        ]);
        return redirect('/llantas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Llanta $llanta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Llanta $llanta)
    {
        return view('llantas.edit', compact('llanta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Llanta $llanta)
    {
        $llanta->update([
        'cliente' => $request->cliente,
        'telefono' => $request->telefono,
        'tipo_llanta' => $request->tipo_llanta,
        'precio' => $request->precio,
        'estado' => $request->estado,
        'fecha_ingreso' => $request->fecha_ingreso,
        ]);
        return redirect('/llantas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Llanta $llanta)
    {
        //
    }
}
