<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Attendance extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'attendances';
protected $fillable = array('status','remark');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

/*several attendances are for a student*/
	public function student()
    {
       return $this->belongsTo('App\Student');
    }
	

}
