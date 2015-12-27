<?php

namespace MamaManzana\Http\Requests\Holidays;

use MamaManzana\Http\Requests\Request;

class UpdateHolidayRequest extends Request
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
            'month' => 'required|min:2|max:2'
        ];
    }
}
