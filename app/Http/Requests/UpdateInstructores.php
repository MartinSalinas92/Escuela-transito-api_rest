<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInstructores extends FormRequest
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
            'id_persona'=>'required',
            'apellido'=>'required|string',
            'nombre'=>'required|string',
            'dni'=>'required',
            'telefono'=>'required',
            'fecha_nacimiento'=>'required|date',
            'status'=>'required'
        ];
    }
}
