<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use App\Staff;
use Auth;
class AdminController extends Controller {


  public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $learners=  \App\Student::all();
            $staff=  Staff::all();
            $subjects= \App\Subject::all();
            $streams=  \App\Stream::all();
            $classes=  \App\Grade::all();
             return view('admin.index')->with('title','SMS|Dashboard')
                     ->with('learners', $learners)
                     ->with('staff',$staff)
                      ->with('subjects', $subjects)
                      ->with('streams',$streams)
                      ->with('classes', $classes);
	}
        

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
           $staff=Staff::where('user_id', '=',$id)->firstOrFail();
           $title=$staff->firstname ."". $staff->lastname;
           return view('admin.show')->with('staff',$staff)->with('title', $title);
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
            $staff=  Staff::find($id);
            return view('admin.edit')->with('staff',$staff);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\UpdateAdminRequest $request,$id)
	{
		
     $staff=Staff::find($id);
       $updated=$staff->fill($request->input())->save();
    

      if($updated){
    return \Redirect::route('show_profile',$id)
      ->with('message', 'Profile successfuly Updated!');
    }else{
       return \Redirect::route('edit_admin')
      ->with('error-message', 'Failed to Update Profile!');
    }

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

	/*logout the Admin*/
    public function logout(){
    	Auth::logout();
     return redirect()->route('login')->with('message','Sign out, Login once again');
    }

    public function view_timetables(){
    	return view('exams.time_table')->with('title','SMS|Time Tables');
    }


}
