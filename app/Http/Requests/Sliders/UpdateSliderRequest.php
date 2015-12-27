<?php

namespace MamaManzana\Http\Requests\Sliders;

use MamaManzana\Http\Requests\Request;

class UpdateSliderRequest extends Request
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
            'title' = 'required|min:3',
            'action' => 'required|min:3',
            'short_description' => 'required|min:3',
            'slug' => 'required|min:3',
            'active' => 'required'
        ];
    }
}
