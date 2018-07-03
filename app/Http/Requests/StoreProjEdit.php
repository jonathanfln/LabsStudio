<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjEdit extends FormRequest
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
            'content' => 'required|max:255',
            'image' => 'max:20000000|dimensions:min_width=362,min_height=271'
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
            'name.required' => "Il faut impérativement un nom pour le projet",
            'content.required' => "Il faut impérativement une description",
            'name.max' => 'Maximum :max caractères',
            'content.max' => 'Maximum :max caractères',
            'image.max' => 'Maximum :max caractères',
            'image.dimensions' => "L'image doit être au minimum de 362*271",
        ];
    }
}
