<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subjects';
protected $fillable = array('name','description');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function grades(){
		return $this->belongsToMany('App\Grade','class_subject','class_id', 'subject_id')->withTimestamps();
	}

	//a subject can have many results
	public function results()
    {
       return $this->hasMany('App\Result');
    }
    //one teacher can teach many subjects
    public function teacher(){
		return $this->belongsTo('App\Teacher');
	}

}
