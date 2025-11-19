<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoTrabajadorRequest;
use Illuminate\Http\Request;
use App\Models\TipoTrabajador;

class TipoTrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoTrabajador::all();
        return response()->json($tipos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoTrabajadorRequest $request)
    {
        $tipo = TipoTrabajador::create($request->validated());
        return response()->json(['msg' => 'Registrado', 'data' => $tipo], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TipoTrabajador $tipo)
    {
        return response()->json($tipo->load('tipoTrabajadores'));
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
