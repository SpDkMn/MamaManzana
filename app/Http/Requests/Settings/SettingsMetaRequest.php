<?php

namespace MamaManzana\Http\Requests\Settings;

use MamaManzana\Http\Requests\Request;

class SettingsMetaRequest extends Request
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
        ];
    }
}
