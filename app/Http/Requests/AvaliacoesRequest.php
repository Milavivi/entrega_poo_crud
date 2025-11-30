<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacoesRequest extends FormRequest
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
            'nota' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'usuario.required' => 'O nome do usuário é obrigatório.',
            'usuario.string' => 'O nome deve ser texto.',
            'usuario.max' => 'O nome pode ter no máximo 255 caracteres.',
            'nota.required' => 'A nota é obrigatória.',
            'nota.integer' => 'A nota deve ser um número inteiro.',
            'nota.min' => 'A nota mínima é 1.',
            'nota.max' => 'A nota máxima é 5.',
            'comentario.required' => 'O comentário é obrigatório.',
            'comentario.string' => 'O comentário deve ser texto.',
        ];
    }
}
