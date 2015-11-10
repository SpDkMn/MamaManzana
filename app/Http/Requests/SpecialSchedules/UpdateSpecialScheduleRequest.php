<?php

namespace App\Http\Requests\SpecialSchedules;

use App\Http\Requests\Request;

class UpdateSpecialScheduleRequest extends Request
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
            'day' => 'required|min:2|max:2',
            'month' => 'required|min:2|max:2',
            'start_time' => 'required|max:5',
            'finish_time' => 'required|max:5'
        ];
    }
}
