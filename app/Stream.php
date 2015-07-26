<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'streams';
protected $fillable = array('name','year');
public $timestamps=false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
      *
	 */
//represent many to many relationship between the streams and students
	
	public function students()
    {
       return $this->belongsToMany('Student', 'streams_students', 'stream_id', 'student_id');
 }
/*a stream handled by a teacher*/
    public function teacher()
    {
       return $this->belongsTo('App\Teacher');
    }
    
    public function grade(){
		return $this->belongsTo('App\Grade');
	}

}
