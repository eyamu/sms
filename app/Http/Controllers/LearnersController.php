<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateLearnerRequest;
use App\Http\Requests\UpdateLearnerRequest;
use App\Http\Requests\AssignStreamRequest;
use App\Student;
use App\Guardian;
use App\Grade;
use App\Stream;



class LearnersController extends Controller {

  private $learner;


  public function __construct(Student $learner){

     $this->learner=$learner;
  }


public function index()
    {
       return view('learners.index')->with('title','SMS|All Learners')
                                    ->with('learners',$this->learner->all());
    }

	//
	public function create()
    {  
      $parents=Guardian::all();
       $classes=Grade::all();
        return view('learners.create')->with('title','SMS|New Learner')
                                      ->with('parents',$parents)
                                      ->with('classes',$classes);
    }



    public function store(CreateLearnerRequest $request)
  {  

      //$created=$this->learner->create($request->all());
      
     //picking the class id for the class selected
     $class_id= \DB::table('classes')->select('id')->where('name', $request->class)->pluck('id');
      
 
      $student = $this->learner->create(array(
                            'firstname'=>$request->firstname,
                            'lastname'=>$request->lastname,
                            'middlename'=>$request->middle_name,
                             'current_class'=>$request->class,
                             'gender'=> $request->gender,
                             'study_mode'=> $request->study_mode,
                             'bursary'=>$request->bursary,
                             'dob'=>$request->dob,
                              'date_joined'=>$request->date_admitted
                             ));
      
                    $class=Grade::find($class_id);               
          $student=$class->students()->save($student);
            
      if($student){
    return \Redirect::route('learners')
      ->with('message', 'Learner successfuly registered!');
    }else{
       return \Redirect::route('create_learner')
      ->with('error-message', 'Failed to register :Learner!');
    }

  }

  public function show($id)
  {
      $learner=$this->learner->find($id);
      $name=$learner->firstname." ". $learner->lastname;
   return view('learners.show')->with('title',$name)->with('learner',$learner);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)

  {
     $parents=Guardian::all();
    $learner=$this->learner->find($id);
   return view('learners.edit')->with('title','SMS| Edit Learners Details')
                ->with('learner',$learner)->with('parents',$parents);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(UpdateLearnerRequest $request,$id)
  {
   
     $learner=$this->learner->find($id);
       $updated=$learner->fill($request->input())->save();
    

      if($updated){
    return \Redirect::route('learners')
      ->with('message', 'Learner successfuly Updated!');
    }else{
       return \Redirect::route('edit_learner')
      ->with('error-message', 'Failed to Update Learners details!');
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

  
  public function assign_stream(Requests\AssignStreamRequest $request) {
         
     $stream=Stream::find($request->stream_id);
     $year=  date('Y');
       if($stream){
           $status=1;//update the student table to reflect that the student has been attached to class
                 $student=Student::find($request->learner_id);
                 $student->status= $status;
           $student->save();
        $student->streams()->attach($request->stream_id,array('year'=>$year));//inserts the tables
        
        return Redirect ::back()->with('message','Learner assigned succesfully');       
  }
 }
 
 public function change_photo(Requests\ChangePhotoRequest $request, $id) {
       
     $file = $request->avatar_file;
        $student = Student::find($id);
        if ($file->isValid()) {
            $destinationPath = 'public/photos/students'; // upload path
            $extension = $request->avatar_file->getClientOriginalExtension();
            $fileName = $student->firstname."".$student->firstname.$extension; // renameing image
            $request->avatar_file->move($destinationPath, $fileName); // sending back with message

            $student->photo = $fileName;
            $student->save();
            return redirect('show_learner', $id);
        }
    }

}
