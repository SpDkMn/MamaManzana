<?php

namespace MamaManzana\Http\Requests\Categories\Data;

use MamaManzana\Http\Requests\Request;

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
          'name' => 'required|min:3',
          'description' => 'required|min:3',
          'short_description' => 'required|min:3',
          'title' => 'required|min:3',
          'keywords' => 'required|min:3',
          'meta_description' => 'required|min:3|max:155'
        ];
    }
}
