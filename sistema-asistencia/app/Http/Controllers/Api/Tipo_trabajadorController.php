<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tipo_trabajadorRequest; 
use Illuminate\Http\Request;
use App\Models\Tipo_trabajador;

class Tipo_trabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = Tipo_trabajador::all();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Tipo_trabajadorRequest $request)
    {
        $tipo = Tipo_trabajador::create($request->validated()); 
        return response()->json(['msg' => 'Registrado', 'data' => $tipo], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_trabajador $tipo)
    {
        return response()->json($tipo->load('tipo_trabajadores')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
