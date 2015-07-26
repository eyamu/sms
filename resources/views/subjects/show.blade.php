@extends('layouts.master')
@section('content')
      
    <!-- Page Content -->

    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar">
                <ul class="nav nav-stacked nav-pills">
                @foreach($streams as $stream)
                    <li class="disabled"><a href="#">{{ $stream->grade->name}}</a>
                    </li>    
                        <a href="{{ URL::route('view-students-in-class' ,array('id'=>$stream->id))}}">{{ $stream->name}}</a>
                      </li>
                @endforeach          
                </ul>
            </div>

            <div class="col-md-9 col-sm-8">
                    <small> <ol class="breadcrumb">
                    <li><a href="{{URL::route('home')}}">Home</a>
                    </li>
                    <li class="active">Assigning Subjects to class</li>
                </ol></small>

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
               
                <p>
                  {{ Form::open(array('route' => 'assign-subjects-to-class','method'=>'post')) }}
                                                  
                                    <label>Select class:</label>
                                          <select name="class_id" 
                                                {{ (Input:: old('class_id'))? ' value="'.Input::old('class_id').'"' : ''}}>
                                                    <option value="">----Select a Class to assign Subjects ---</option>
                                                     <?php 
                                                                                                                //$products = Stock::where('business_id','=',  $business_id);
                                                             $classes =Grade::orderBy('name','asc')->get();
                                                            ?>                   
                                                        @foreach($classes as $class)
                                                         <option value="{{$class->id}}">Senior {{ $class->name}} </option>
                                                         @endforeach
                                                </select>
                                                
                                      @if($errors->has('class_id'))
                                          <span class="label label-danger">{{ $errors->first('class_id') }}
                                              </span>    
                                                @endif
                                                <br>
                                         
                                            <label>Subjects</label>
                                           <?php 
                                         $subjects =Subject::orderBy('name','asc')->get();
                                       ?>   
                                            
                                                   @foreach($subjects as $subject)
                                                   <input type="checkbox" value="{{$subject->id}}" name="subjects" 
                                                    {{ (Input:: old('subjects'))? ' value="'.Input::old('subjects').'"' : ''}}/>{{$subject->name}}  &nbsp;&nbsp; &nbsp; <br>
                                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                    @endforeach

                                      @if($errors->has('subjects'))
                                          <span class="label label-danger">{{ $errors->first('subjects') }}
                                              </span>    
                                                @endif
                                                    <br>
                                  
                                                &nbsp;  &nbsp;
                                                <input type="submit" value="Assign">
                                             
                         </form>

        </div>
        <!-- /.row -->

    </div>
  @stop

    