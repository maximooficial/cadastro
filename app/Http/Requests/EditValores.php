<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditValores extends FormRequest
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
        
            'valor1' => 'required|min:1|max:40',
            'valor2' => 'required|min:1|max:40',
             
   
            '_token'  => 'required|min:2|max:256'   ];
    }
}
