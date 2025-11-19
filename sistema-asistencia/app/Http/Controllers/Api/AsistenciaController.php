<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asistencia;
class AsistenciaController extends Controller
{

    public function index()
    {
        $asistencia=Asistencia::all();
        return response()->json($asistencia);
    }

    public function store(Asistencia $request)
    {

        $asistencia= Asistencia::create($request->validated());
        return response()->json(['msg' => 'Registrado', 'data' => $asistencia], 201);
     }

    public function show(string $id)
    {
        $Asistencia=Asistencia::findOrFail($id);
        return response()->json($Asistencia);
    }

    public function update(Request $request, string $id)
    {
        $Asistencia=Asistencia::findOrFail($id);
        $Asistencia->update($request->all());
        return response()->json(['msg' => 'Actualizado', 'data' => $Asistencia]);
    }

    public function destroy(string $id)
    {
        $Asistencia=Asistencia::findOrFail($id);
        $Asistencia->delete();
        return response()->json(['msg' => 'Eliminado']);
    }
}
