<?php

namespace App\Http\Requests\Categories\Data;

use App\Http\Requests\Request;

class UpdateCategoryRequest extends Request
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
            'name' = 'required|min:3',
            'description' => 'required|min:3',
            'short_description' => 'required|min:3'
        ];
    }
}
