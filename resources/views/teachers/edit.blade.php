@extends('layouts.master')

@section('content')
    <!-- Page Content -->

    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-4 sidebar">
                <ul class="nav nav-stacked nav-pills">
                    <li class="disabled"><a href="#">Class/Standards</a>
                    </li>
                                   
                    <li class="disabled"><a href="#">Blog</a>
                    </li>
                    <li><a href="blog-home-1.html">Blog Home 1</a>
                    </li>
                    <li><a href="blog-home-2.html">Blog Home 2</a>
                    </li>
                    <li><a href="blog-post.html">Blog Post</a>
                    </li>
                    <li class="disabled"><a href="#">Blog</a>
                    </li>
                    <li><a href="full-width.html">Full Width Page</a>
                    </li>
                    <li class="active"><a href="sidebar.html">Sidebar Page</a>
                    </li>
                    <li><a href="faq.html">FAQ</a>
                    </li>
                    <li><a href="404.html">404</a>
                    </li>
                    <li><a href="pricing.html">Pricing Table</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 col-sm-8">
                    <small> <ol class="breadcrumb">
                    <li><a href="{{URL::route('home')}}">Home</a>
                    </li>
                    <li class="active">Edit teacher's Information</li>
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

                    {{ Form::open(array('url' => 'update-teacher','class'=>'form-signin','method'=>'put')) }}
                                          <fieldset>
                                        <legend></legend>
                                        
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Firstname</label>
                                           
                                                 {{Form::text('firstname',$teacher->firstname)}}
                                                
                                                 @if($errors->has('firstname'))
                                          <span class="label label-danger">{{ $errors->first('firstname') }}
                                              </span>    
                                                @endif                                         
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Lastname</label>
                                        
                                                 {{Form::text('lastname',$teacher->lastname)}}
                                                
                                                 @if($errors->has('firstname'))
                                          <span class="label label-danger">{{ $errors->first('firstname') }}
                                              </span>    
                                                @endif                                           
                                          </div>
                                            <div class="form-group">
                                            <label class="control-label col-lg-4">Phone</label>
                                        
                                                 {{Form::text('phone',$teacher->phone)}}
                                                
                                                 @if($errors->has('firstname'))
                                          <span class="label label-danger">{{ $errors->first('firstname') }}
                                              </span>    
                                                @endif                                           
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-lg-4">Date Of Birth</label>
                                        
                                                 {{Form::text('dob',$teacher->dob)}}
                                                
                                                 @if($errors->has('dob'))
                                          <span class="label label-danger">{{ $errors->first('dob') }}
                                              </span>    
                                                @endif                                           
                                          </div>
                                            <div class="form-group">
                                            <label class="control-label col-lg-4">Date of Joining</label>
                                        
                                                 {{Form::text('date_joined',$teacher->date_joined)}}
                                                
                                                 @if($errors->has('date_joined'))
                                          <span class="label label-danger">{{ $errors->first('date_joined') }}
                                              </span>    
                                                @endif                                           
                                          </div>


                                         <div class="form-group">
                                            <label class="control-label col-lg-4">Email</label>
                                        
                                                 {{Form::text('email',$teacher->email)}}
                                                
                                                 @if($errors->has('email'))
                                          <span class="label label-danger">{{ $errors->first('email') }}
                                              </span>    
                                                @endif                                           
                                          </div>
                                          


                                         
                                        </div>
                                           <div class="form-group">
                                                  <input type="hidden" name="id" value="{{ $teacher->id}}">
                                             
                                        </div>
                                       
                                       <div style="text-align:center" class="form-actions no-margin-bottom">
                                            <input type="submit" value="Make Changes" class="btn btn-primary btn-medium " />
                                             <input type="reset" value="Cancel" class="btn btn-primary btn-medium " />
                                        </div>
                                    </fieldset>
                              {{Form::close()}}

                 
        </div>
        <!-- /.row -->
    </div>
  @stop

    