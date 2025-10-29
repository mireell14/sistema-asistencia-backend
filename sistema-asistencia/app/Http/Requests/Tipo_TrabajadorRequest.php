<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tipo_TrabajadorRequest extends FormRequest
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
            'nombre_tipo' => 'required|string|max:50',
            'descripcion' => 'required|string|max:100',
        ];
    }
}
