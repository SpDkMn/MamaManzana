<?php

namespace MamaManzana\Http\Requests\Products\Img;

use MamaManzana\Http\Requests\Request;

class CreateProductImgRequest extends Request
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
            'product_id' => 'required|integer',
            'product_img' => 'required|image|mimes:jpg,jpeg,gif,bmp,png'
        ];
    }
}
