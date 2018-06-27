<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestiEdit extends FormRequest
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
            'content' => 'required|max:255',
            'clients_id' => 'required|integer|exists:clients,id'
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
            'image.required' => "Il faut impérativement un avis",
            'name.max' => 'Maximum :max caractères',
            'clients_id.required' => 'Il faut impérativement un client',
            'clients_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'clients_id.exists' => "Ce n'est pas bien d'essayer de tricher",
        ];
    }
}
