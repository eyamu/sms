<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateClassRequest;
use App\Http\Requests\UpdateClassRequest;
use App\Grade;
use App\Subject;
use App\Requirement;

class ClassesController extends Controller {

    private $classes;

    public function __construct(Grade $classes) {
        $this->classes = $classes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
        return view('classes.index')->with('title', 'SMS|Classes')
                        ->with('classes', $this->classes->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        return view('classes.create')->with('title', 'SMS|Create Class');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateClassRequest $request) {
        //
        $created = $this->classes->create($request->all());
        if ($created) {
            return \Redirect::route('classes')
                            ->with('message', 'Class successfuly Added!');
        } else {
            return \Redirect::route('create_class')
                            ->with('error-message', 'Failed to create class, try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //        
      $class=$this->classes->find($id);
     
   return view('classes.show')->with('title','SMS| Class Details')
           ->with('class', $class)
           ->with('streams',$class->streams)
            ->with('subjects',$class->subjects)
            ->with('learners',$class->students)
             ->with('requirements',$class->requirements);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
        return view('classes.edit')->with('class',$this->classes->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdateClassRequest $request,$id) {
        //
         $class=$this->classes->find($id);
      $updated=$class->fill($request->input())->save();
    
      if($updated){
    return \Redirect::route('classes')
      ->with('message', 'Class successfuly Updated!')->with('id',$id);
    }else{
       return \Redirect::route('edit_class')
      ->with('error-message', 'Failed to Update Class details!')->with('id',$id);
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
    
    public function get_subjects($id) {
        
        $class=  Grade::find($id);
        $subjects=  Subject::all();
       return view('classes.assign_subjects')
               ->with('title', 'SMS|Assign Subjects to class')
               ->with('class',$class)
               ->with('subjects', $subjects); 
    }
    
    
     public function assign_subjects(Requests\AssignSubjectsRequest $request) {
      
        $class=Grade::find( $request->class_id);
        $assigned= $class->subjects()->attach($request->subject_id);
       
      if($assigned){
    return \Redirect::route('classes')
      ->with('message', 'Class Assigned subjects successfuly Updated!')->with('id',$id);
    }else{
       return \Redirect::route('assign_subjects',$request->class_id)
      ->with('error-message', 'Failed to Assign class the subjects, Do it again!');
    }
          
          

    }

}
