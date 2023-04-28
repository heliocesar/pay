<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'email' => 'required|email|max:191|email',
                'cpfCnpj' => 'required',
                'phone' => 'required',
                'name' => 'required',
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'name.required' => 'O Name é obrigatório.',
            'cpfCnpj.required' => 'O CPF/CNPJ é obrigatório.',
            'email.required' => 'O Email address é obrigatório.',            
            'phone.required' => 'O Phone Number é obrigatório.',            
        ];
    }
}
