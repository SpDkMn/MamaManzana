<?php

namespace MamaManzana\Http\Requests\Turns;

use MamaManzana\Http\Requests\Request;

class UpdateTurnRequest extends Request
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
            'start_time' => 'required|max:5',
            'finish_time' => 'required|max:5'
        ];
    }
}
