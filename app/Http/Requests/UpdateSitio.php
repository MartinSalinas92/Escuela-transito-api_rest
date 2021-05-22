<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSitio extends FormRequest
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

            'barrio_id'=>'required',
            'nombre_sitio'=>'required',
            'nombre_barrio'=>'required',
            'nombre_calle',
            'numero_sitio',
            'info_add'

        ];
    }
}
