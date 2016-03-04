<?php

namespace MamaManzana\Http\Requests;

use MamaManzana\Http\Requests\Request;

class OrderCreate extends Request
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
            'addresses' => 'required|integer',
            'date_delivery' => 'required|min:10|max:10',
            'turn_delivery' => 'required|integer',
            'cart_id' => 'required|integer',
            'addresses_delivery' => 'integer'
        ];
    }
}
