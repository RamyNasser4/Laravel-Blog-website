<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            
            'name' => 'required| string | max:255',
            'email' => 'required | string | email | max:255 | unique:users',
            'gender'=> 'required | string | max:10',
            'address' => 'required | string | max:255',
            'password' =>'required | string | min:8 | confirmed'

        ];
    }
    public function messages(){
        return [
            'name.required' => 'A name is required',
            'email.required' => 'An email is required',
            'gender.required' => 'A gender is required',
            'address.required' => 'An address is required',
            'password.required' => 'A password is required',
            'password.confirmed' => 'Password confirmation required'
        ];
    }
}
