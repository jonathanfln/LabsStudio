<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserCreate extends FormRequest
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
            'image' => 'image|mimes:jpeg,png,bmp,gif,svg,jpg|dimensions:min_width=360,min_height=448',
            'email' => 'required|email|max:45|unique:users,email',
            'roles_id' => 'required|integer|exists:roles,id',
            'password' => 'required|min:8|confirmed',
            'job' => 'max:45'
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
            'name.required' => "Il faut impérativement un avis",
            'name.max' => 'Maximum :max caractères',
            'image.image' => 'Le fichier doit être une image',
            'image.dimensions' => "L'image doit être au minimum de 360*448",
            'email.required' => 'Il faut impérativement une adresse email',
            'email.email' => "Ce n'est pas une adresse email valide",
            'email.max' => 'Maximum :max caractères',
            'email.unique' => "Cette adresse email est déjà utilisée",
            'roles_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'roles_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'roles_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'password.required' => "Il faut impérativement un mot de passe",
            'password.min' => "Minimum :min caractères",
            'password.confirmed' => "Les mots de passe ne corespondent pas",
            'job.max' => 'Maximum :max caactères',
        ];
    }
}
