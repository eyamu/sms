<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Student extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'students';
protected $fillable = array('user_id','firstname','lastname','middlename','current_class','status','dob','gender','study_mode','bursary','date_joined','photo');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

//represent many to many relationship between the streams and students
	
  public function streams()
    {
       return $this->belongsToMany('App\Stream', 'streams_students', 'student_id', 'stream_id');
    }
    
    //represent many to many relationship between the guardians and students
    public function guardians()
    {
       return $this->belongsToMany('App\Guardian', 'parents_students', 'student_id', 'parent_id');
    }
  
     public function grades()
    {
       return $this->belongsToMany('App\Grade', 'class_student', 'student_id', 'class_id')
                     ->withPivot('year');
   }


  public function user()
    {
        return $this->hasOne('App\User');
    }
  
   //a student can have many results
	public function results()
    {
       return $this->hasMany('App\Result');
    }

    /*a parent can represent many students in the school*/
	public function parent()
    {
       return $this->belongsTo('App\Guardian');
    }

    /*a student's attendance is recorded several times*/
	public function attendances()
    {
       return $this->hasMany('App\Attendance');
    }

    public function givenOuts()
    {
       return $this->hasMany('App\UniformOut');
    }
	
   public function payments()
    {
       return $this->hasMany('App\Payment');
    }

     public function fee()
    {
        return $this->hasOne('App\Fee');
    }
  
	

	

}
