<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {

	//
        protected  $table="languages";
        protected  $fillable=array('name');
        
        //langauge can be spoken by many users
        public function users() {
            return $this->belongsToMany('App\User')->withTimestamps();
        }
}
