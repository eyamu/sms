<?php namespace App;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'costs';
protected $fillable = array('type','name','amount','month','status','date','remark');
public $timestamps=false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
/*customising the date*/

}
