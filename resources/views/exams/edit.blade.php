@extends('layouts.master')

@section('content')
    <!-- Page Content -->

    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar">
                <ul class="nav nav-stacked nav-pills">
                    <li class="disabled"><a href="#">Students</a>
                    </li>
                                   
                    <li><a href="#">View All Students</a>
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
                </ul>
            </div>

            <div class="col-md-9 col-sm-8">
                    <small> <ol class="breadcrumb">
                    <li><a href="{{URL::route('home')}}">Home</a>
                    </li>
                    <li class="active">subjects</li>
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
                 <div class="col-md-12 col-sm-8">

                    {{ Form::open(array('url' => 'update-exam_type','class'=>'form-signin','method'=>'put')) }}
                                          <fieldset>
                                        <legend></legend>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Exam Type</label>
                                           
                                                 {{Form::text('name',$exam_type->name)}}
                                                
                                                 @if($errors->has('name'))
                                          <span class="label label-danger">{{ $errors->first('name') }}
                                              </span>    
                                                @endif                                         
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Description</label>
                                        
                                                 {{Form::textarea('description',$exam_type->description)}}
                                                
                                                 @if($errors->has('description'))
                                          <span class="label label-danger">{{ $errors->first('description') }}
                                              </span>    
                                                @endif                                           
                                          </div>
                                         
                                         
                                        </div>
                                           <div class="form-group">
                                                  <input type="hidden" name="id" value="{{ $exam_type->id}}">
                                             
                                        </div>
                                       
                                       <div style="text-align:center" class="form-actions no-margin-bottom">
                                            <input type="submit" value="Make Changes" class="btn btn-primary btn-medium " />
                                             <input type="reset" value="Cancel" class="btn btn-primary btn-medium " />
                                        </div>
                                    </fieldset>
                              {{Form::close()}}
                            </div>

                 
        </div>
        <!-- /.row -->
    </div>
  @stop

    