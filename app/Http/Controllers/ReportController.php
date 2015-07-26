<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
            $school=  \App\School::first();
		return view('reports.show')->with('title','SMS|REPORT')->with('school', $school);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($subject_id,$class_id)
	{
           $exams=  \App\Exam::all();
	  $subject=  \App\Subject::find($subject_id);
          $class=  \App\Grade::find($class_id);
            return view('reports.create')->with('title','SMS|REPORT')
                    ->with('class', $class)
                ->with('subject', $subject)
                ->with('exams', $exams);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            
            $term=\Illuminate\Support\Facades\Input::get('term');
             $mark=\Illuminate\Support\Facades\Input::get('result');
              $exam=\Illuminate\Support\Facades\Input::get('exam');
              return "Exam".$exam ." Mark". $mark." term".  $term;
		/*
             $stream=Stream::find($request->stream_id);
     $year=  date('Y');
       if($stream){
           $status=1;//update the student table to reflect that the student has been attached to class
                 $student=Student::find($request->learner_id);
                 $student->status= $status;
           $student->save();
        $student->streams()->attach($request->stream_id,array('year'=>$year));//inserts the tables
        
        return Redirect ::back()->with('message','Learner assigned succesfully');       
	
                 * }
                 */
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
