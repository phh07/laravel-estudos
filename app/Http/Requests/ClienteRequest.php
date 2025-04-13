<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'nascimento' => 'required'
        ];
    }

    public function messages():array
    {
        return [
            'nome.required' => 'O nome é obrigatório!',
            'cpf.required' => 'O cpf é obrigatório!',
            'email.required' => 'O email é obrigatório!',
            'telefone.required' => 'O telefone é obrigatório!',
            'nascimento.required' => 'A data de nascimento é obrigatória!'
        ];
    }
}
