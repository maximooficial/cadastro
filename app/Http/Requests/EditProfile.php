<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfile extends FormRequest
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
        
            'name' => 'required|min:3|max:40',
            'cpf' => 'required|min:11|max:15',
            'email' => 'required|min:11|max:30',
            'password' => 'required|min:6|max:256',
            'birthday' => 'required|min:5|max:15',   
   
            '_token'  => 'required|min:2|max:256'   ];
    }
}
