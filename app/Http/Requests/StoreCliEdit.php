<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCliEdit extends FormRequest
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
            'company' => 'required|max:45',
            'image' => 'max:20000000|dimensions:min_width=100,min_height=100'
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
            'name.required' => "Il faut impérativement un nom pour le client",
            'company.required' => "Il faut impérativement un nom de société",
            'name.max' => 'Maximum :max caractères',
            'company.max' => 'Maximum :max caractères',
            'image.max' => 'Maximum :max caractères',
            'image.dimensions' => "L'image doit être au minimum de 100*100",
        ];
    }
}
