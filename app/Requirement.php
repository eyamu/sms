<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Requirement extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requirements';
	protected $guarded=array('id');
	public $timestamps=false;
protected $fillable = array('name','amount','rate');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

/*representmany to many elationship between the classes and requirements*/
	public function grades()
    {
       return $this->belongsToMany('App\Grade','class_requirement','requirement_id', 'class_id')->withTimestamps();
    }
	
	public function payments()
    {
       return $this->hasMany('App\Payment');
    }
	

}
