<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'fees';
protected $fillable = array('name','amount_charged','study_mode','status','deadline');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */



/*represent many to many relationship between the fees and students
	public function students()
    {
       return $this->belongsToMany('Student', 'fees_students', 'fee_id', 'student_id')
                 ->withPivot('amount_paid','payment_mode', 'balance','month','term','remark')
                 ->withTimestamps();
    }
*/
public function grade(){
	return $this->belongsTo('App\Grade');
}

public function payments()
    {
       return $this->hasMany('App\Payment');
    }

  public function student()
    {
        return $this->belongsTo('App\Student');
    }

}
