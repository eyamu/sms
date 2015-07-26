<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateSchoolRequest extends Request {

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
		$rules = array(    'name' => 'required',
                          'category' => 'required',
                           'website' => 'url',
                          'telephone' => 'required',
                           'email' => 'email',
                            'address' => 'min:2',
                            'district' => 'required'
                          );
		return $rules;
	}

}
