<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
 use Hash;
use App\Staff;

class TeachersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(\App\Subject $subjects)
	{
            $subjects=$subjects->all();
		//
            return view('teachers.create')->with('title','SMS|Create teacher')->with('subjects',$subjects);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateTeachersRequest $request)
	{
          
	      $username=$request->username;
              $password=$request->password;

              $firstname=$request->firstname;
              $lastname=$request->lastname;
                 $phone=$request->phone;
                  $gender=$request->gender;
                 $email=$request->email;
                   $district=$request->district;
                    $dob=$request->dob;
                     $date_joined=$request->date_joined;
                     $description=$request->description;

                $user=User::create(array(
                                'username'=>$username,
                                'password'=>Hash::make($password)
                                ));
                 

              $staff = Staff::create(array(
                            'user_id'=>$user->id,
                            'firstname'=>$firstname,
                            'lastname'=>$lastname,
                            'phone'=>$phone,
                             'gender'=>$gender,
                               'dob'=>$dob,
                               'district'=>$district,
                               'date_joined'=>$date_joined,
                              'email'=>$email,
                              'description'=>$description,
                  
                             ));
              if( $staff ){
                $user->staff()->associate($staff);  
                //assign the subjects to the teacher
                $staff->subjects()->sync($request->subjects);       

                      return redirect()->route('create_teacher')->with('message','Teacher added successfully');
              
             }else{
          return redirect()->route('create_teacher')->with('error-message','Error adding the Staff member');

             }
            
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
