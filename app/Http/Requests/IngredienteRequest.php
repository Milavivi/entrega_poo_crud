<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredienteRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|string|max:255',
            'unidade' => 'required|string|max:50',
            'receita_id' => 'required|exists:receitas,id',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do ingrediente é obrigatório.',
            'nome.string' => 'O nome deve ser um texto.',
            'nome.max' => 'O nome pode ter no máximo 255 caracteres.',
            'quantidade.required' => 'A quantidade é obrigatória.',
            'quantidade.string' => 'A quantidade deve ser texto.',
            'quantidade.max' => 'A quantidade pode ter no máximo 255 caracteres.',
            'unidade.required' => 'A unidade é obrigatória.',
            'unidade.string' => 'A unidade deve ser texto.',
            'unidade.max' => 'A unidade pode ter no máximo 50 caracteres.',
            'receita_id.required' => 'Você deve selecionar uma receita.',
            'receita_id.exists' => 'A receita selecionada é inválida.',
        ];
    }
}
