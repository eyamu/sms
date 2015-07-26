<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Salary extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'salaries';
protected $fillable = array('type','remark');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


//represent many to many relationship between the fees and students
	public function teachers()
    {
       return $this->belongsToMany('App\Teacher', 'salaries_teachers', 'salary_id', 'teacher_id');
    }


	

}
