<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation extends FormRequest
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
            'nombre' => 'required|min:2|max:20',
            'descripcion' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:10', //no he conseguido validar que tenga un numero
            'likes' => 'required|integer|gt:0'
        ];
    }
}
