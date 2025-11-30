<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FavoritoRequest extends FormRequest
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
            'usuario' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
        ];
    }

   public function messages()
    {
        return [
            'usuario.required' => 'O nome do usuário é obrigatório.',
            'usuario.string' => 'O nome deve ser texto.',
            'usuario.max' => 'O nome pode ter no máximo 255 caracteres.',
            'titulo.required' => 'O título da receita é obrigatório.',
            'titulo.string' => 'O título deve ser texto.',
            'titulo.max' => 'O título pode ter no máximo 255 caracteres.',
        ];
    }
 
}
