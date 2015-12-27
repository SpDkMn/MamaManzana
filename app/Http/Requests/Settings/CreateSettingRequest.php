<?php

namespace MamaManzana\Http\Requests\Settings;

use MamaManzana\Http\Requests\Request;

class CreateSettingRequest extends Request
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
            'logo' => 'required|image|mimes:jpg,jpeg,gif,bmp,png',
            'favicon' => 'required|image|mines:ico',
            'footer' => 'required|image|mimes:jpg,jpeg,gif,bmp,png',
            'email_order' => 'required|email',
            'phrase' => 'required|min:5',
        ];
    }
}
