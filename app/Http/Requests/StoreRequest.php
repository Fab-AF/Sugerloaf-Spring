<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
		### Edit case
		if(isset($this->store) && $this->store->id != "") {
			$params = [
				"name"=>"required",
				"email"=>[
					"bail",
					"required",
					'email' => 'unique:stores,email,'.$this->store->id.',id'
				]
			];
		} else {
			### Add case
			$params["email"] = [
				"bail",
				"required",
				"email",
				"unique:stores,email"
			];
		}
        return $params;
    }

	public function messages()
    {
        return [
            "email.required"=>"Please enter valid email",
            "name.required"=>"Please enter name",
            //"secondary_contact.required"=>"Please enter valid phone. Ex: 111-111-1111",
        ];
    }
}
