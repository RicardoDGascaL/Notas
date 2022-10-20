<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveNotaRequest extends FormRequest
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
            'title' => 'required',
            'descripcion' => 'descripcion',
        ];
    }

    public function messages(){

        return [

            'title.required' => 'El proyecto necesita un titulo',
            'descripcion.required' => 'El proyecto requiere una descripción',
        ];
    }
}
