<?php namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $table = 'roles';
  protected $fillable = array('name','display_name','description');	

  /*representmany to many elationship between the role and users*/
	public function users()
    {
       return $this->belongsToMany('User','role_user')->withTimestamps();
    }
}