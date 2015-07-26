<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateLearnerRequest extends Request {

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
                          'lastname' => 'required|alpha',
                           'middle_name' => 'alpha',
                          'dob' => 'required|date',
                           'study_mode' => 'required',
                           'gender' => 'required',
                            'bursary' => 'required',
                           'photo' => 'mimes:jpeg,bmp,png,jpg',
                            'class' => '',
                            'date_admitted'=>'date'
                    
                          );
		return $rules;
	}

}
