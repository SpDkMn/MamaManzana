<?php

namespace MamaManzana\Http\Requests;

use MamaManzana\Http\Requests\Request;

class ProfileEdit extends Request
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
            'name' => 'required',
            'genre' => 'required',
            'date' => 'required',
            'email' => 'required|email'
        ];
    }
}
