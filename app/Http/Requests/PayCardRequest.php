<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayCardRequest extends FormRequest
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
                'dueDate' => 'required|date',
                'value' => 'required',
                'externalReference' => 'required',
                'holderName' => 'required',
                'number' => 'required',
                'expiryMonth' => 'required',
                'expiryYear' => 'required',
                'ccv' => 'required',
                'name' => 'required',
                'email' => 'required',
                'cpfCnpj' => 'required',
                'phone' => 'required'
            ];
        }
        return [];
    }

    public function messages()
    {
        return [
            'dueDate.required' => 'O dueDate é obrigatório.',
            'value.required' => 'O value é obrigatório.',
            'externalReference.required' => 'O externalReference address é obrigatório.',
            'holderName.required' => 'O holderName é obrigatório.',
            'number.required' => 'O number é obrigatório.',
            'expiryMonth.required' => 'O expiryMonth é obrigatório.',
            'expiryYear.required' => 'O expiryYear é obrigatório.',
            'ccv.required' => 'O ccv é obrigatório.',
            'name.required' => 'O name é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'cpfCnpj.required' => 'O cpfCnpj é obrigatório.',
            'phone.required' => 'O phone é obrigatório.'
        ];
    }
}
