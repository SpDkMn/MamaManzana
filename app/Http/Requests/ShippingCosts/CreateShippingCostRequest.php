<?php

namespace App\Http\Requests\ShippingCosts;

use App\Http\Requests\Request;

class CreateShippingCostRequest extends Request
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
            'zone_id' => 'required|exists:zones,id',
            'name' => 'required|min:3',
            'cost' => 'required'
        ];
    }
}
