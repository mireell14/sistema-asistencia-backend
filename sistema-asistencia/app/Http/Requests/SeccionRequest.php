<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeccionRequest extends FormRequest
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
            'id_grado'=> 'required|integer|',
            'nombre_seccion'=> 'Required|string|max:10',
            'capacidad'=> 'Required|integer|',
            'anio_lectivo'=> 'Required|integer|',
            //
        ];
    }
}
