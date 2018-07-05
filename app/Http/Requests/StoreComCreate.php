<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComCreate extends FormRequest
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
            'email' => 'required|email|max:45',
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
            'email.unique' => 'Cette adresse est déjà utilisée',
            'subject.required' => 'Champ requis',
            'subject.max' => 'Maximum :max caractèress',
            'message.required' => 'Champ requis',
        ];
    }
}
