<?php

namespace MamaManzana\Http\Requests\Categories\Meta;

use MamaManzana\Http\Requests\Request;

class UpdateCategoryMetaRequest extends Request
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
            'category_id' => 'required|integer',
            'title' => 'required|min:3',
            'keywords' => 'required|min:3',
            'description' => 'required|min:3|max:155'
        ];
    }
}
