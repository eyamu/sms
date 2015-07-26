<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DocCategory extends Model {

	//
        protected  $table="doc_categories";
        protected  $fillable=array('name','user_type','is_status','updated_by');
    
//doc category can have many docs
     public function documents()
    {
       return $this->hasMany('App\Document');
    }
}
