<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAdminRequest extends Request {

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
		$rules = array(    'firstname' => 'required',
                  'lastname' => 'required',
                   'email' => 'email',
                    'dob' => 'required|date',
                    'phone' => 'required',
                    'district' => 'required',
                     
                          );
		return $rules;
	}

}
