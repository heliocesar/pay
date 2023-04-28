<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayBoletoRequest extends FormRequest
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
                'externalReference' => 'required'
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
        ];
    }
}
