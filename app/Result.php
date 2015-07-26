<?php  namespace App;

use Illuminate\Database\Eloquent\Model;


class Result extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'results';
protected $fillable = array('term','marks');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
//many results held by a student
	public function student()
    {
       return $this->belongsTo('App\Student');
    }

//many results can belong to a subject
    public function subject()
    {
       return $this->belongsTo('App\Subject','subject_id');
    }

    //many results can belong to an exam
    public function exam()
    {
       return $this->belongsTo('App\Exam');
    }
    
    //a user can record many results
	public function users()
    {
       return $this->belongsTo('App\User');
    }
    
	

}
