<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Payment extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'payment_records';
protected $fillable = array('date','amount','total_amount_due','total_amount_paid','item_balance','total_balance','status','receipt_no');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


//represent one to Many relationship with student
	public function student()
    {
       return $this->belongsTo('App\Student');
    }

public function fee(){
	return $this->belongsTo('App\Fee');
}

public function requirement(){
	return $this->belongsTo('App\Requirement');
}


	

}
