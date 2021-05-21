<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'start_date' => 'required|date',
            'finish_date' => 'required|date|after:start_date',
            'time'=>'date_format:H:i',
            'type_course'=>'required',
            'instructor_id'=>'required',
            'site_id'=>'required',
        ];
    }
}
