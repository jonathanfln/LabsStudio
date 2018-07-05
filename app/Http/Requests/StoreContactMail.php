<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMail extends FormRequest
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
            'name' => 'required|max:45',
            'email' => 'required|email',
            'subject' => 'required|max:45',
            'message' => 'required',
        ];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function messages()
    {
        return [
            'name.required' => 'Champ requis',
            'name.max' => 'Maximum :max caractères',
            'email.required' => 'Champ requis',
            'email.email' => 'Il faut que ce soit une adresse email',
            'subject.required' => 'Champ requis',
            'subject.max' => 'Maximum :max caractères',
            'message.required' => 'Champ requis',
        ];
    }
}
