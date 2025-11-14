<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\Asistencia; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asistencia;

class Asistencia extends Controller
{
    
    public function index()
    {
        $Asistencia = Asistencia::all();
        return response()->json($Asistencia);
    }


    public function store(AsistenciaRequest $request)
    {
    
        $med= Asistencia::create($request->validated()); 
        return response()->json(['msg' => 'Registrado', 'data' => $med], 201);
     }
   
    public function show(string $id)
    {
        return response()->json($Asistencia->load('asistencia'));
    }

    public function update(Request $request, string $id)
    {
        $Asistencia=update($request->validated());
        return response()->json(['msg' => 'Actualizado', 'data' => $Asistencia]);
    }

    public function destroy(string $id)
    {
        $Asistencia->delete();
        return response()->json(['msg' => 'Eliminado']);
    }
}
