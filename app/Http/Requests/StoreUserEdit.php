<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserEdit extends FormRequest
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
            'image' => 'image|mimes:jpg',
            'email' => 'required|email|max:45|unique:users,email,'.$this->user->id,
            'roles_id' => 'required|integer|exists:roles,id',
            'password' => 'nullable|min:8|confirmed',
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
            'email.required' => 'Il faut impérativement une adresse email',
            'email.email' => "Ce n'est pas une adresse email valide",
            'email.max' => 'Maximum :max caractères',
            'email.unique' => "Cette adresse email est déjà utilisée",
            'roles_id.required' => "Ce n'est pas bien d'essayer de tricher",
            'roles_id.integer' => "Ce n'est pas bien d'essayer de tricher",
            'roles_id.exists' => "Ce n'est pas bien d'essayer de tricher",
            'password.min' => "Minimum :min caractères",
            'password.confirmed' => "Les mots de passe ne corespondent pas",
            'job.max' => 'Maximum :max caactères',
        ];
    }
}
