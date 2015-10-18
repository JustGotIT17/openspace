<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignUpRequest extends Request
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
            //
            'firstname' => 'required|alpha_dash',
            'lastname' => 'required|alpha_dash',
            'username' => 'required|min:3|max:15|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:25|same:cpassword',
            'cpassword' => 'required|min:6|max:25|same:password',
        ];
    }
}
