<?php  namespace App;

use Illuminate\Database\Eloquent\Model;


class Guardian extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parents';
protected $fillable = array('firstname','lastname','middlename','phone','gender','district','home_address','office_address','occupation','photo','email');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

 //represent many to many relationship between the guardians and students
    public function students()
    {
       return $this->belongsToMany('App\Student', 'parents_students', 'parent_id', 'student_id')
               ->withPivot('relation')->withTimestamps();
    }

     public function user()
    {
        return $this->hasOne('App\User');
    }
	

}
