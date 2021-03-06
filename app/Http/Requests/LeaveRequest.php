<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LeaveRequest extends Request
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
            'leave_type_id' => 'required',
            'from_date' => 'required|date|before_equal:to_date',
            'to_date' => 'required|date',
        ];
    }

    public function attributes()
    {
        return[
            'leave_type_id' => 'leave type',
        ];

    }
}
