<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateLearnerRequest extends Request {

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
		$rules = array(    'firstname' => 'required|alpha',
                          'lastname' => 'required',
                          'parent'=>'required',
                           'middle_name' => 'alpha',
                          'dob' => 'required|date',
                           'study_mode' => 'required',
                            'bursary' => 'required',
                          
                          );
		return $rules;
	}

}
