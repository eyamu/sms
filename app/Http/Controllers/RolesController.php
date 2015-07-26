<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRoleRequest;
use App\Role;




class RolesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	private $role;


  public function __construct(Role $role){

     $this->role=$role;
  }

	public function index()
	{
		//
		return view('roles.index')->with('title','SMS|User Roles');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('roles.create')->with('title','SMS|New Role');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRoleRequest $request)
	{
		
          $created=$this->role->create($request->all());
      if($created){
    return redirect()->route('create_role')
      ->with('message', 'Role successfuly registered!');
    }else{
       return redirect()->route('create_role')
      ->with('error-message', 'Failed to Add role');
               
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
