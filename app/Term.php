<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model {

	 protected  $table='terms';
    protected $fillable=array('year_id','name');
    
    //a term belongs to a year
	public function year()
    {
       return $this->belongsTo('App\AcademicYear','year_id');
    }


}
