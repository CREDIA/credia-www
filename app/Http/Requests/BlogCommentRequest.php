<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCommentRequest extends FormRequest
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
            'nombre' => 'required',
            'correo' => 'required|email',
            'comentario' => 'required|min:5',
            'captcha' => 'captcha|required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Es necesario agregar su nombre.',
            'descripcion.required' => 'Es necesario agregar un comentario.',
            'captcha' => 'El captcha es invalido',
            'captcha.required' => 'El captcha es necesario'
        ];
    }
}
