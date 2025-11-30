<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaRequest extends FormRequest
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
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'modo_preparo' => 'required|string',
            'tempo_preparo' => 'required|integer|min:1',
            'categoria_id' => 'required|exists:categorias,id',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título da receita é obrigatório.',
            'titulo.max' => 'O título pode ter no máximo 255 caracteres.',
            'descricao.required' => 'A descrição é obrigatória.',
            'modo_preparo.required' => 'O modo de preparo é obrigatório.',
            'modo_preparo.string' => 'O modo de preparo deve ser texto.',
            'tempo_preparo.required' => 'O tempo de preparo é obrigatório.',
            'tempo_preparo.integer' => 'O tempo de preparo deve ser um número inteiro.',
            'tempo_preparo.min' => 'O tempo de preparo deve ser pelo menos 1 minuto.',
            'categoria_id.required' => 'Você deve selecionar uma categoria.',
            'categoria_id.exists' => 'A categoria selecionada é inválida.',
        ];
    }
}
