<?php

namespace App\Http\Requests\Categories\Img;

use App\Http\Requests\Request;

class CreateCategoryImgRequest extends Request
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
            'category_img' => 'required|image|mimes:jpg,jpeg,gif,bmp,png'
        ];
    }
}
