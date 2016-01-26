<?php

namespace MamaManzana\Http\Requests\Contacts;

use MamaManzana\Http\Requests\Request;

class CreateContactRequest extends Request
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
            'user_id' => 'exists:users,id',
            'first_name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:4'
        ];
    }
}
