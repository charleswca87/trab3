<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricanteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:255',
            'cidade' => 'required|min:3|max:255',
            'produto' => 'required',
            'id' => 'id',
        ];
    }

    /**
     * Customizando as mensagens
     *
     * @return void
     */
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres',
        ];
    }
 public function attributes()
    {
        return [
            'nome' => 'Nome',
            'cidade' => 'Cidade',
            'produto' => 'Produto',
            'id' => 'id',
        ];
    }

}
