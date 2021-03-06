<?php

namespace MamaManzana\Http\Requests\Products\Data;

use MamaManzana\Http\Requests\Request;

class CreateProductRequest extends Request
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
            'cost' => 'required|numeric',
            'title' => 'required|min:3',
            'keywords' => 'required|min:3',
            'meta_description' => 'required|min:3|max:155',
            'img' => 'required|image|mimes:jpg,jpeg,gif,bmp,png'
        ];
    }
}
