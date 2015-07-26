<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateParentRequest extends Request {

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
                           'middle_name' => '',
                          'phone' => 'required',
                           'occupation' => 'required',
                            'district' => 'required',
                            'home_address' => 'required',
                             'office_address' => '',
                             'student_id'=>'required',
                             'relation' => 'required',
                           'photo' => 'mimes:jpeg,bmp,png,jpg',
                           'email' => 'email|unique:parents,email'
                          );
		return $rules;
	}

}
