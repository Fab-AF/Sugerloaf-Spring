<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $params = [
            "name"=>"required",
            "email"=>[
				"bail",
				"required",
				'email' => 'unique:users,email,'.$this->user->id.',id'
			]
        ];
		if( !isset($this->user->id) || $this->user->id  == null) {
			$params["password"] = "required";
			$params["email"] = [
				"bail",
				"required",
				"email",
				"unique:users,"
			];			
			$params["role"] = "required";
		}
        return $params;
    }

	public function messages()
    {
        return [
            "email.required"=>"Please enter valid email",
            "password.required"=>"Please enter password",
            "name.required"=>"Please enter name",
            //"secondary_contact.required"=>"Please enter valid phone. Ex: 111-111-1111",
        ];
    }
}
