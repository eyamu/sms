<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateParentRequest;
use App\Guardian;

class ParentsController extends Controller {

    private $parent;

    public function __construct(Guardian $parent) {

        $this->parent = $parent;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Guardian $parent) {
        return view('parents.index')->with('parents', $parent->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id) {
        
        return view('parents.create')->with('title', 'SMS|New Parent')
                ->with('student',  \App\Student::find($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateParentRequest $request)
  {  

     $parent = new Guardian(array(
                            'firstname'=>$request->firstname,
                            'lastname'=>$request->lastname,
                            'middlename'=>$request->middle_name,
                             'phone'=>$request->phone,
                             'district'=> $request->district,
                             'home_address'=> $request->home_address,
                             'office_address'=> $request->office_address,
                             'occupation'=>$request->occupation,
                             'email'=>$request->email,
                                 ));
      
             $student=  \App\Student::find($request->student_id);               
         $parent=$student->guardians()->save($parent, ['relation' => $request->relation]);
            
      if($parent){
    return \Redirect::route('learners')
      ->with('message', 'Parent successfuly registered!');
    }else{
       return \Redirect::route('learners')
      ->with('error-message', 'Failed to register Parent!');
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
        $parent = $this->parent->find($id);
        $learners = $parent->students;
        //$learners=\DB::table('students')->where('parent_id',$id)->get();

        return view('parents.show')->with('title', 'SMS| Parents Details')
                        ->with('parent', $parent)->with('learners', $learners);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $parent = $this->parent->find($id);
        return view('parents.edit')->with('parent', $parent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\UpdateParentRequest $request, $id) {
        $parent = $this->parent->find($id);
        $updated = $parent->fill($request->input())->save();
        if ($updated) {
            return \Redirect::route('parents')
                            ->with('message', 'Parent successfuly Updated!');
        } else {
            return \Redirect::route('edit_parent')
                            ->with('error-message', 'Failed to Update Parent details!');
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

}
