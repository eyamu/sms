<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classes';
protected $fillable = array('name','description');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function subjects(){
		return $this->belongsToMany('App\Subject','class_subject','class_id', 'subject_id')->withTimestamps();
	}

	public function streams(){
		return $this->hasmany('App\Stream','class_id');
	}

	public function requirements()
    {
       return $this->belongsToMany('App\Requirement','class_requirement','requirement_id', 'class_id')->withTimestamps();
    }
    public function fees(){
    	return $this->hasMany('App\Fee');
    }

//accessing the student's grade/class through their stream
    
    /*public function students()
    {
        return $this->hasManyThrough('Student', 'Stream');
    }
    */

    public function students()
    {
       return $this->belongsToMany('App\Student', 'class_student', 'class_id', 'student_id')
                     ->withPivot('year');
   }

	

}
