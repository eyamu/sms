<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>@if(isset($title))
            {{$title}}
            @endif
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/maps/jquery-jvectormap-2.0.1.css')}}" />
        <link href="{{ asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
        <!-- select2 -->
        <link href="{{asset('css/select/select2.min.css')}}" rel="stylesheet">

    </head>
    <body>
        <!-- Header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-toggle"></span>
                    </button>

                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">


                    </ul>

                </div>
            </div><!-- /container -->
        </div>
        <!-- /Header -->

        <div class="container">

            <!-- upper section -->
            <div class="row">
                <div class="col-sm-3">
                </div><!-- -->
                <div class="col-sm-9">

                    <!-- column 2 -->	
                    <h3> Step 2 -School Set Up</h3>  

                    <hr style="color: orange;">

                    <div class="row">
                        <!-- center left-->	
                        <div class="col-md-12">


                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>School Details</h4></div>
                                <div class="panel-body">

                                    <form method="post" action="{{route('create_school')}}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">School Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-8">
                                                <input type="text" id="name" required="required"  name="name" 
                                                       value="{{old('name')}}"
                                                       class="form-control col-md-7 col-xs-12">
                                                @if($errors->has('name'))
                                                <span class="label label-danger">{{ $errors->first('name') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">School Type <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control" tabindex="-1" name="category">
                                                    <option value=""></option>
                                                    <option value="Nursery">Nursery</option>   
                                                    <option value="Primary">Primary</option>  
                                                    <option value="Secondary">Secondary</option> 
                                                    <option value="College">College</option> 
                                                    <option value="Tertiary">Tertiary</option>   
                                                    <option value="Nursery and Primary">Nursery & Primary</option>  
                                                    <option value="Primary and Secondary">Primary & Secondary</option>           
                                                </select>                                                
                                                @if($errors->has('category'))                                                              
                                                <span class="label label-danger">{{ $errors->first('category') }}
                                                </span>    
                                                @endif
                                            </div>
                                        </div>  

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="website"  name="website" 
                                                       class="form-control col-md-7 col-xs-12"
                                                       value="{{old('website')}}">
                                                @if($errors->has('website'))
                                                <span class="label label-danger">{{ $errors->first('website') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="moto">Moto* 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="moto"  name="moto" required="required"
                                                       class="form-control col-md-7 col-xs-12"
                                                       value="{{old('moto')}}">
                                                @if($errors->has('moto'))
                                                <span class="label label-danger">{{ $errors->first('moto') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="parent" class="control-label col-md-3 col-sm-3 col-xs-12">Badge/Logo</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="photo" class="form-control col-md-7 col-xs-12" type="file" 
                                                       name="logo" value={{old('logo')}}>
                                                @if($errors->has('logo'))
                                                <span class="label label-danger">{{ $errors->first('logo') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div> 


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control" data-inputmask="'mask' : '9999 999 999'" name="telephone"
                                                       required="required" value="{{old('telephone')}}">
                                                @if($errors->has('telephone'))
                                                <span class="label label-danger">{{ $errors->first('telephone') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="email" class="form-control col-md-7 col-xs-12" type="text" 
                                                       name="email" value="{{old('email')}}">
                                                @if($errors->has('email'))
                                                <span class="label label-danger">{{ $errors->first('email') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="district" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="address" class="form-control col-md-7 col-xs-12" type="text" 
                                                          name="address"  value="{{old('address')}}">
                                                </textarea>
                                                @if($errors->has('address'))
                                                <span class="label label-danger">{{ $errors->first('address') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="district" class="control-label col-md-3 col-sm-3 col-xs-12">District *</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="district" class="form-control col-md-7 col-xs-12" type="text" required="required"
                                                       name="district"  value="{{old('district')}}">
                                                @if($errors->has('district'))
                                                <span class="label label-danger">{{ $errors->first('district') }}
                                                </span>    
                                                @endif        
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <footer class="text-center">Joel Eyamu &COPY;<?php echo date('Y'); ?></strong></a></footer>
                        <script src="{{asset('js/bootstrap.min.js')}}"></script>

                        <!-- chart js -->
                        <script src="{{asset('js/chartjs/chart.min.js')}}"></script>
                       
                        <!-- input mask -->
                        <script src="{{asset('js/input_mask/jquery.inputmask.js')}}"></script>
                        <!-- switchery -->
                        <script src="{{asset('js/switchery/switchery.min.js')}}"></script>
                       
                        <script src="{{asset('js/editor/external/google-code-prettify/prettify.js')}}"></script>
                        <!-- select2 -->
                        <script src="{{asset('js/select/select2.full.js')}}"></script>
                        <!-- form validation -->
                        <script type="text/javascript" src="{{asset('js/parsley/parsley.min.js')}}"></script>
                       
                        <!-- input_mask -->
                        <script>
                            $(document).ready(function () {
                                $(":input").inputmask();
                            });
                        </script>
                        <!-- /input mask -->
                        <script src="{{asset('js/custom.js')}}"></script>


                        <!-- select2 -->
                        <script>
                            $(document).ready(function () {
                                $(".select2_single").select2({
                                    placeholder: "Select a School category",
                                    allowClear: true
                                });
                                
                            });
                        </script>
                        <!-- /select2 -->
                        
                        <!-- form validation -->
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $.listen('parsley:field:validate', function () {
                                    validateFront();
                                });
                                $('#demo-form .btn').on('click', function () {
                                    $('#demo-form').parsley().validate();
                                    validateFront();
                                });
                                var validateFront = function () {
                                    if (true === $('#demo-form').parsley().isValid()) {
                                        $('.bs-callout-info').removeClass('hidden');
                                        $('.bs-callout-warning').addClass('hidden');
                                    } else {
                                        $('.bs-callout-info').addClass('hidden');
                                        $('.bs-callout-warning').removeClass('hidden');
                                    }
                                };
                            });

                            $(document).ready(function () {
                                $.listen('parsley:field:validate', function () {
                                    validateFront();
                                });
                                $('#demo-form2 .btn').on('click', function () {
                                    $('#demo-form2').parsley().validate();
                                    validateFront();
                                });
                                var validateFront = function () {
                                    if (true === $('#demo-form2').parsley().isValid()) {
                                        $('.bs-callout-info').removeClass('hidden');
                                        $('.bs-callout-warning').addClass('hidden');
                                    } else {
                                        $('.bs-callout-info').addClass('hidden');
                                        $('.bs-callout-warning').removeClass('hidden');
                                    }
                                };
                            });
                            try {
                                hljs.initHighlightingOnLoad();
                            } catch (err) {
                            }
                        </script>
                        <!-- /form validation -->
                        
                        </body>
                    </html>
