<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dni'           => 'required|string|max:20|unique:students,dni',
            'nombre'        => 'required|string|max:100',
            'apellido'      => 'required|string|max:100',
            'fecha_nacimiento' => 'required|date',
            'genero'        => 'required|in:M,F,O',
            'direccion'     => 'nullable|string|max:200',
            'telefono'      => 'nullable|string|max:15',
            'estado'        => 'required|in:activo,inactivo',
            'grado_id'      => 'required|integer|exists:grados,id_grado',
           
        ];

    }
}
