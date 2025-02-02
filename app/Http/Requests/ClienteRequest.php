<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'cpf'  => 'required',
            'dataNascimento' => 'required'
        ];
        // return [
        //     "nome" => "required|max:10",
        //     "cpf"  => "required|numeric|max:11|unique:clientes,cpf",
        //     "dataNascimento" => "required"
        // ];
    }
}
