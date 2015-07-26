<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Subject;


class SubjectsController extends Controller {

	private $subject;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(Subject $subject){

     $this->subject=$subject;
     }

	public function index()
	{
		return view('subjects.index')->with('title','SMS|Subjects')
		->with('subjects',$this->subject->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('subjects.create')->with('title','SMS|New Subject');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateSubjectRequest $request)
	{ 

		$created=$this->subject->create($request->all());
      if($created){
    return \Redirect::route('create_subject')
      ->with('message', 'Subject successfuly registered!');
    }else{
       return \Redirect::route('create_subject')
      ->with('error-message', 'Failed to Add Subject!');
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
		return view('subjects.edit')->with('subject',$this->subject->find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateSubjectRequest $request,$id)
	{
		//
     $subject=$this->subject->find($id);
      $updated=$subject->fill($request->input())->save();
    
      if($updated){
    return \Redirect::route('subjects')
      ->with('message', 'Subject successfuly Updated!')->with('id',$id);
    }else{
       return \Redirect::route('edit_subject')
      ->with('error-message', 'Failed to Update Subject details!')->with('id',$id);
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

}
