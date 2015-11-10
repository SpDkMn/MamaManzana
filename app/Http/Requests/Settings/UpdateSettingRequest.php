<?php

namespace App\Http\Requests\Settings;

use App\Http\Requests\Request;

class UpdateSettingRequest extends Request
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
            'title' => 'required|min:3',
            'keywords' => 'required|min:5',
            'description' => 'required|min:50',
            'email_order' => 'required|email',
            'phrase' => 'required|min:5',
        ];
    }
}
