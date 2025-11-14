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

    public function show(string $id)
    {
        return response()->json($Grado->load('grado'));
    }

    public function update(Request $request, string $id)
    {
        $Grado=update($request->validated());
        return response()->json(['msg' => 'Actualizado', 'data' => $Grado]);    
    }

    public function destroy(string $id)
    {
        $Grado->delete();
        return response()->json(['msg' => 'Eliminado']);
    }
}
