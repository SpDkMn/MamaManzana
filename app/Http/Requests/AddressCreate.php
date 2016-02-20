<?php

namespace MamaManzana\Http\Requests;

use MamaManzana\Http\Requests\Request;

class AddressCreate extends Request
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
            'name_address' => 'required|min:value',
            'last_name_address' => 'required|min:value',
            'phone' => 'required',
            'other_phone' => '',
            'address' => 'required|min:7',
            'reference' => 'required',
            'zona' => 'required'
        ];
    }
}
