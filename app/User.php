<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Cmgmyr\Messenger\Traits\Messagable;
use Zizaco\Entrust\HasRole;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword,Messagable;
	 use EntrustUserTrait; // add this trait to your user model
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'username', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	/*representmany to many elationship between the role and users*/
	public function roles()
    {
       return $this->belongsToMany('App\Role','role_user')->withTimestamps();
    }

    public function staff()
    {
       return $this->belongsTo('App\Staff');
    }
    public function student()
    {
       return $this->belongsTo('App\Student');
    }
    public function parent()
    {
       return $this->belongsTo('App\Guardian');
    }
    //shall be used to track which user records given results
     public function results()
    {
       return $this->hasMany('App\Result');
    }
    //users can speak many langauges
        public function languages() {
            return $this->belongsToMany('App\Language')->withTimestamps();
        }
//user can own many docs
     public function documents()
    {
       return $this->hasMany('App\Document');
    }
    

}
