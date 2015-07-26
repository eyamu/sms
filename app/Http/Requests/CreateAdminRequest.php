<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAdminRequest extends Request {

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
	{	//		
$rules = array(   'firstname' => 'required',
                  'lastname' => 'required',
                   'username' => 'required|unique:users,username',
                  'password' => 'required|unique:users,password',
                   'confirm_password' => 'required|same:password',
                   'email' => 'required|email|unique:staff,email'
                          );
	return $rules;
	}

}
