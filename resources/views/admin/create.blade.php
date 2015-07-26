<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@if(isset($title))
            {{$title}}
            @endif
        </title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/maps/jquery-jvectormap-2.0.1.css')}}" />
        <link href="{{ asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />
       
        <!-- select2 -->
        <link href="{{asset('css/select/select2.min.css')}}" rel="stylesheet">
        <!-- switchery -->
        <link rel="stylesheet" href="{{asset('css/switchery/switchery.min.css')}}" />

        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/nprogress.js')}}"></script>
        <script>
NProgress.start();
        </script>

        <link href="{{asset('css/installation.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body

        <div class="installation-box-body installation-header">
            <h1>Step 3: SMS Installation</h1>
        </div>
        <div class="installation-box-body">
            <h3>Create School System Administrator</h3>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{Session::get('message')}}
                        </div>
                        @endif
                        @if(Session::has('error-message'))
                        <div class="alert alert-error alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            {{Session::get('error-message')}}
                        </div>
                        @endif
                        <form method="post" action="{{URL::route('create_admin')}}" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"  name="firstname" value="{{old('firstname')}}" 

                                           class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('firstname'))
                                    <span class="label label-danger">{{ $errors->first('firstname') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name"  name="lastname" 
                                           required="required" class="form-control col-md-7 col-xs-12"
                                           value="{{old('lastname')}}">
                                    @if($errors->has('lastname'))
                                    <span class="label label-danger">{{ $errors->first('lastname') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Username*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="username" class="form-control col-md-7 col-xs-12" type="text" required="required"
                                           name="username" value="{{old('username')}}">
                                    @if($errors->has('username'))
                                    <span class="label label-danger">{{ $errors->first('username') }}
                                    </span>    
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="middle-name" class="form-control col-md-7 col-xs-12" type="password" required="required"
                                           name="password">
                                    @if($errors->has('password'))
                                    <span class="label label-danger">{{ $errors->first('password') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="password" class="form-control col-md-7 col-xs-12" type="password" required="required"
                                           name="confirm_password">
                                    @if($errors->has('confirm_password'))
                                    <span class="label label-danger">{{ $errors->first('confirm_password') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="email" class="form-control col-md-7 col-xs-12" type="text" required="required"
                                           value="{{old('email')}}" name="email">
                                    @if($errors->has('email'))
                                    <span class="label label-danger">{{ $errors->first('email') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    Male
                                    <input type="radio" class="flat" name="gender" id="genderM" value="Male" required="required" /> Female
                                    <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                                    @if($errors->has('gender'))
                                    <span class="label label-danger">{{ $errors->first('gender') }}
                                    </span>    
                                    @endif        
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '9999 999 999'" name="phone" value="{{old('phone')}}" required="required">
                                    @if($errors->has('phone'))
                                    <span class="label label-danger">{{ $errors->first('phone') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="ln_solid"></div>
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
            <div class="installation-box-body installation-header">
                <p style="text-align: center">Copyright (C) 2015 Joel Eyamu|joeleyamu@gmail.com |256784 197545  </p>         
            </div>
        </div>
    </div>


</div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- icheck -->
<script src="{{asset('js/icheck/icheck.min.js')}}"></script>
<!-- tags -->
<script src="{{asset('js/tags/jquery.tagsinput.min.js')}}"></script>

<!-- input mask -->
<script src="{{asset('js/input_mask/jquery.inputmask.js')}}"></script>
<!-- switchery -->
<script src="{{asset('js/switchery/switchery.min.js')}}"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="{{asset('js/moment.min2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/datepicker/daterangepicker.js')}}"></script>
<!-- select2 -->
<script src="{{asset('js/select/select2.full.js')}}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{asset('js/parsley/parsley.min.js')}}"></script>
<!-- textarea resize -->
<script src="{{asset('js/textarea/autosize.min.js')}}"></script>
<script>
autosize($('.resizable_textarea'));
</script>

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
            placeholder: "Select a Category",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /input tags -->
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


</script>
<!-- /form validation -->

</body>

</html>