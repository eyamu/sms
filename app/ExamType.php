<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class ExamType extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'exam_types';
protected $fillable = array('name','description');
public $timestamps=false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    //an exam type can have many exams
	public function exams()
    {
       return $this->hasMany('App\Exam');
    }

	

}
