<?php

namespace MamaManzana\Http\Requests\ContactInformations;

use MamaManzana\Http\Requests\Request;

class UpdateContactInformationRequest extends Request
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
            'email' => 'required|email',
            'phone' => 'required|min:7',
            'address' => 'required|min:5'
        ];
    }
}
