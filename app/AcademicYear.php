<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model {
    protected  $table='academic_years';
    protected $fillable=array('periods','year');//periods represents either semester or term basis
    
   //academic year can have many terms
	public function terms()
    {
       return $this->hasMany('App\Term');
    }

}
