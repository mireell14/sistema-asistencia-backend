<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    public function index()
    {
        $grados = Grado::all();
        return response()->json($grados);
    }

    public function store(Request $request)
    {
        $grado = Grado::create($request->all());
        return response()->json([
            'msg' => 'Registrado',
            'data' => $grado
        ], 201);
    }

    public function show($id)
    {
        return Grado::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $grado = Grado::findOrFail($id);
        $grado->update($request->all());
        return response()->json(['msg' => 'Actualizado', 'data' => $grado]);
    }

    public function destroy($id)
    {
        $grado = Grado::findOrFail($id);
        $grado->delete();
        return response()->json(['msg' => 'Eliminado']);
    }
}
