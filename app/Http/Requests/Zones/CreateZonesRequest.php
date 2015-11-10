<?php

namespace App\Http\Requests\Zones;

use App\Http\Requests\Request;

class CreateZonesRequest extends Request
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
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'name' => 'required|min:3',
            'reference' => 'required|min:3'
        ];
    }
}
