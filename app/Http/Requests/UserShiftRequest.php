<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserShiftRequest extends Request
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
            'from_date' => 'required|date|before_equal:to_date',
            'to_date' => 'required|date',
            'office_shift_id' => 'required'
        ];
    }

    public function attributes()
    {
        return[
            'office_shift_id' => 'office shift',
        ];

    }
}
