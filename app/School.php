<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	//

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'school_details';
protected $fillable = array('name','category','website','logo','email','telephone','moto','vision','address','district');

}
