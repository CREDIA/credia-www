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
            'nombre.required' => 'Es necesario agregar un nombre.',
            'correo.required' => 'Es necesario agregar un correo.',
            'comentario.required' => 'Es necesario agregar un comentario',
            'captcha' => 'required|captcha_api:' . request('key') . ',math'
        ];
    }
}
