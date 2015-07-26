<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {

	//
     protected  $table="documents";
        protected  $fillable=array('name','user_type','is_status','updated_by');
       
        //doc belongs to a user, user can own many docs
     public function user()
    {
       return $this->belongsTo('App\User');
    }
     //doc belongs to a doc category,category can have many docs
     public function category()
    {
       return $this->belongsTo('App\DocCategory','category_id');
    }
}
