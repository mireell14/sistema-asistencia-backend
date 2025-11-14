<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\Grado; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    
    public function index()
    {
        return response()->json(Grado::With('grado')->get());
    }

    public function store(Request $request)
    {
        $med= Grado::create($request->validated());
        return response()->json(['msg' => 'Registrado', 'data' => $med], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
