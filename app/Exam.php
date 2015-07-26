<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Exam extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'exams';
protected $fillable = array('name','start_date');
public $timestamps=false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    //an exam can have many results
	public function results()
    {
       return $this->hasMany('Result');
    }

    //many exams can be done for an exam type
	public function examType()
    {
       return $this->belongsTo('App\ExamType','exam_type_id');
    }


	

}
