<?php namespace App;
use Illuminate\Database\Eloquent\Model;


class Uniform extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'uniforms';
protected $fillable = array('item','quantity','description','date_added');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

    public function givenOuts()
    {
       return $this->hasMany('App\UniformOut');
    }
	

}
