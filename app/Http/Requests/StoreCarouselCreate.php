<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarouselCreate extends FormRequest
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
            'image' => 'required|max:20000000',
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
            //
            'name.required' => "Il faut impérativement un nom pour l'image",
            'image.required' => "Il faut impérativement une image",
            'name.max' => 'Maximum :max caractères',
            'image.max' => "L'image ne peut pas dépasser 20MB",
        ];
    }
}
