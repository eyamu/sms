<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChangePhotoRequest extends Request {

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
             $rules = array(                   
                    'avatar_file' => 'required|mimes:jpeg,png,jpg',
                   'id'=>'required'
                          );
		return $rules;
	}

}
