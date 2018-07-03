<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtCreate extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required',
            'categories_id' => 'required|integer|exists:categories,id',
            'tags_id' => 'required',
            'image' => 'required|max:20000000|dimensions:min_width=755,min_height=270',
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
            'title.required' => "Il faut impérativement un nom pour l'article",
            'title.max' => 'Maximum :max caractères',
            'content.required' => "Il faut impérativement un contenu",
            'image.required' => "Il faut impérativement une image",
            'image.max' => "L'image ne peut pas dépasser 20MB",
            'image.dimensions' => "L'image doit être au minimum de 755*270",
            'catégories_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'catégories_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'catégories_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'tags_id.required' => 'Il faut impérativement un tag',
        ];
    }
}
