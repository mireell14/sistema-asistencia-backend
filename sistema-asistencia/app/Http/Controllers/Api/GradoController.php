<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grado;
class GradoController extends Controller
{
    public function index()
    {
        $grados=Grado::all();
        return response()->json($grados);
    }
public function store(Request $request)
    {
        $med= Grado::create($request->validated());
        return response()->json(['msg' => 'Registrado', 'data' => $med], 201);
    }

    public function show(string $id)
    {
        $Grado=Grado::findOrFail($id);
        return response()->json($Grado->load('grado'));
    }

    public function update(Request $request, string $id)
    {
        $Grado=Grado::findOrFail($id);
        $Grado->update($request->all());
        return response()->json(['msg' => 'Actualizado', 'data' => $Grado]);
    }

    public function destroy(string $id)
    {
        $Grado=Grado::findOrFail($id);
        $Grado->delete();
        return response()->json(['msg' => 'Eliminado']);
    }
}
