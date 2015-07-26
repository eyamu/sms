@extends('layouts.master')

@section('content')
    <!-- Page Content -->

    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar">
                <ul class="nav nav-stacked nav-pills">
                    <li class="disabled"><a href="#">Students</a>
                    </li>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">View By Stream <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          @foreach($streams as $stream)
                            <li><a href="{{URL::route('view-students-in-class',array('id'=>$stream->id))}}">Senior {{$stream->grade->name}} {{$stream->name}} </a>
                            </li>
                          @endforeach
                        </ul>
                    </li>
                    </li>
                    <li><a href="{{URL::route('manage-students')}}">Manage Students</a>
                    </li>
                    <li class="disabled"><a href="#">Subjects</a>
                    </li>
                  <li><a href="{{URL::route('subjects')}}">Manage Subjects</a>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          @foreach($subjects as $subject)
                            <li><a href="{{URL::route('view-students-in-class',array('id'=>$subject->id))}}"> {{$subject->name}} </a>
                            </li>
                          @endforeach
                        </ul>
                    </li>

              <li class="disabled"><a href="#">Examinations</a>
                    <li><a href="{{URL::route('subjects')}}">Manage Exams</a>
                   

                    </li>
                </ul>
            </div>

            <div class="col-md-9 col-sm-8">
                    <small> <ol class="breadcrumb">
                    <li><a href="{{URL::route('home')}}">Home</a>
                    </li>
                    <li class="active">Exams</li>
                </ol></small>               
                <p>
                <p>
                      @if(Session::has('message'))
                         <div class="alert alert-info alert-dismissable">
                                        {{Session::get('message')}}
                         </div>
                          @endif

               @if(Session::has('error-message'))          
                     <div class="alert alert-danger alert-dismissable">
                                    {{Session::get('error-message')}}
                     </div>                     
                @endif
      </div>
       <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage Exams
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Exam types</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Exams</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Results</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">View </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">  
                                            <button class="btn btn-warning" data-toggle="modal"  data-target="#newReg">
                                                   Register New Exam Type
                                            </button>
                                    
                                    <p>
                                      
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Exam Type</th>
                                            <th>Remarks</th>
                                             </tr>
                                    </thead>
                                    <tbody>
                                        <?php $exam_types=ExamType::all();?>
                                        @foreach($exam_types as $exam_type)
                                        <tr>
                                            <td>{{$exam_type->id}}</td>
                                            <td>{{$exam_type->name}}</td>
                                            <td>{{$exam_type->description}}</td>
                                            <td>
        <a href="{{ URL::route('edit-exam-type' ,array('id'=>$exam_type->id))}}"
    data-toggle="tooltip" data-placement="left" title="Edit {{ $exam_type->name }} {{ $exam_type->description }} " >
        <img src="{{asset('images/ico/actions-edit.png')}}"/></a>
       <a href="{{ URL::route('add-exam' ,array('id'=>$exam_type->id))}}"
    data-toggle="tooltip" data-placement="left" title="Add Exams for {{ $exam_type->name }} {{ $exam_type->description }} " >
        <img src="{{asset('images/ico/add_new.png')}}"/></a>
         </td>
                                           </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    </p>
                                </div>
                         <div class="tab-pane fade" id="profile">
                              <p>
                                      
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Exam</th>
                                            <th>Start Date</th>
                                             </tr>
                                    </thead>
                                    <tbody>
                                        <?php $exams=Exam::all();?>
                                        @foreach($exams as $exam)
                                        <tr>
                                            <td>{{$exam->id}}</td>
                                            <td>{{$exam->name}} <?php echo "[";?>{{$exam->examType->name}}<?php echo "]";?></td>
                                            <td>{{$exam->start_date}}</td>
                                            <td>
                                                <a href="{{ URL::route('edit-exam' ,array('id'=>$exam->id))}}"
    data-toggle="tooltip" data-placement="left" title="Edit {{ $exam->name }} {{ $exam->start_date}} " >
        <img src="{{asset('images/ico/actions-edit.png')}}"/></a> </td>
                                           </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
    </div>


     <div class="modal fade" id="newReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Adding Exam Type.......</h4>
                                        </div>
                                        <div class="modal-body">
                                <form action="{{URL::to('exams/exam-type')}}"  method="post">
                                           
                                       <div class="form-group">
                                                  <label>Pick Exam Type</label>
                                                <select name="name"
                                                {{ (Input:: old('name'))? ' value="'.Input::old('name').'"' : ''}}>
                                                    <option value="">----Select exam type---</option>
                                                     <?php
                                                
                                                   $subjects = Subject::all();
                                                         ?>                   
                                                        @foreach($subjects as $subject)
                                                         <option value="{{$subject->name}}">{{$subject->name}} </option>
                                                         @endforeach
                                                </select>
                                                @if($errors->has('name'))
                                          <span class="label label-danger">{{ $errors->first('name') }}
                                              </span>    
                                                @endif
                                            </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"
                                             {{ (Input:: old('description'))? ' value="'.Input::old('description').'"' : ''}}>
                                               </textarea>
                                             @if($errors->has('description'))
                                          <span class="label label-danger">{{ $errors->first('description') }}
                                              </span>    
                                                @endif
        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Exam Type</button>
                                        </div>
                                    </form>
                                    </div>

    </div>
  @stop

    