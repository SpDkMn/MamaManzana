<?php

namespace App\Http\Requests\About\Img;

use App\Http\Requests\Request;

class CreateAboutImgRequest extends Request
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
            'about_id' => 'required|integer',
            'about_img' => 'required|image|mimes:jpg,jpeg,gif,bmp,png'
        ];
    }
}