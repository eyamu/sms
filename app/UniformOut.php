<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class UniformOut extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'uniforms_given_out';
protected $fillable = array('quantity','status');
public $timestamps=false;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


    public function uniform()
    {
       return $this->belongsTo('App\Uniform');
    }
    public function student()
    {
       return $this->belongsTo('App\Student');
    }
	

}
