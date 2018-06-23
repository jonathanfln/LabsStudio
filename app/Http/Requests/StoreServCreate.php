<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServCreate extends FormRequest
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
            'image' => 'required',
            'name' => 'required|max:45',
            'content' => 'required|max:255'
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
            'image.required' => "Il faut impérativement une icone",
            'name.required' => "Il faut impérativement un nom pour le service",
            'name.max' => 'Maximum :max caractères',
            'name.required' => "Il faut impérativement une description pour le service",
            'name.max' => 'Maximum :max caractères',
        ];
    }
}
