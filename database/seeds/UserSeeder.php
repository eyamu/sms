<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\Staff as Staff;
use Hash;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
    {
        DB::table('users')->delete();
       DB::table('staff')->delete();

        $user=User::create(array('username' => 'junia',
                                 'password'=>Hash::make('junia')));

         $admin=Staff::create(array(
         	'user_id'=>$user->id,
            'firstname' => 'joel',
             'lastname' => 'eyamu',
             'phone' => '(078)4197544',
             'email' => 'admin@gmail.com',
            
        ));
          $user->staff()->associate($admin);

    }

}
