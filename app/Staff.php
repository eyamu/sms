<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Staff extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'staff';
protected $fillable = array('user_id','firstname','lastname','phone','gender','dob','date_joined','district','photo','email','description');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

/*represent one to many relationship between the teacher and streams, one teacher can handle one or many streams*/
	public function streams()
    {
       return $this->hasMany('App\Stream');
    }

    //teacher represents onlt himself in the system
     public function user()
    {
        return $this->hasOne('App\User');
    }
	

	//represent many to many relationship between the staff and salaries
	public function salaries()
    {
       return $this->belongsToMany('App\Salary', 'salaries_teachers', 'teacher_id', 'salary_id')
                     ->withPivot('amount','month','term','remark')
                     ->withTimestamps();
    }

    public function subjects()
    {
       return $this->belongsToMany('App\Subject')->withTimestamps();
    }


}
