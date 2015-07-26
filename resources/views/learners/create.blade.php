<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@if(isset($title))
            {{$title}}
            @endif
        </title>
        <!-- Bootstrap core CSS -->

        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{ asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/maps/jquery-jvectormap-2.0.1.css')}}" />
        <link href="{{ asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/datatables/tools/css/dataTables.tableTools.css')}}" rel="stylesheet">
        <!-- calender and time table -->
        <link href="{{asset('css/calendar/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{asset('css/calendar/fullcalendar.print.css')}}" rel="stylesheet" media="print">

        <!-- select2 -->
        <link href="{{asset('css/select/select2.min.css')}}" rel="stylesheet">
        <!-- switchery -->
        <link rel="stylesheet" href="{{asset('css/switchery/switchery.min.css')}}" />

        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/nprogress.js')}}"></script>
        <script>
NProgress.start();
        </script>

        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="" ><img src="{{ asset('images/logo.png')}}" alt="..." class="img-circle profile_img"></a>
                        </div>
                        <div class="clearfix"></div>
                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">

                                <ul class="nav side-menu">

                                    <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>

                                    <li><a><i class="fa fa-group"></i>Students <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="{{route('create_learner')}}">Add Student</a>
                                            </li>
                                            <li><a href="">Former learners</a>
                                            </li>
                                             <li><a href="{{route('create_class')}}">Add Class</a>
                                            </li>
                                            <li><a href="{{route('parents')}}">Manage Parents</a>
                                            </li>


                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                @include('layouts.top_navigation')
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">

                        <div class="page-title">
                            <div class="title_left">
                                <h2><small><a href="{{URL::previous()}}"><i class="fa fa-arrow-circle-left"></i> Back</a></small></h2>
                            </div>
                            <div class="title_right">

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-plus"></i> Add Student</h2>
                                    <div class="clearfix"></div>
                                </div>
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
                                    <form method="post" enctype="multipart/form-data" action="{{route('create_learner')}}" data-parsley-validate class="form-horizontal form-label-left">


                                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <i class="fa fa-info-circle"></i> Personal Details
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name"  name="firstname" 
                                                       required="required" class="form-control col-md-7 col-xs-12" value={{old('firstname')}}>
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
                                                       required="required" class="form-control col-md-7 col-xs-12" value={{old('lastname')}}>
                                                @if($errors->has('lastname'))
                                                <span class="label label-danger">{{ $errors->first('lastname') }}
                                                </span>    
                                                @endif       
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middle_name">Middle Name <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="middle_name"  name="middle_name" 
                                                       required="required" class="form-control col-md-7 col-xs-12"
                                                       value={{old('middle_name')}}>
                                                @if($errors->has('middle_name'))
                                                <span class="label label-danger">{{ $errors->first('middle_name') }}
                                                </span>    
                                                @endif       
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" 
                                                       required="required" type="text" name="dob"
                                                       value={{old('dob')}}>
                                                @if($errors->has('dob'))
                                                <span class="label label-danger">{{ $errors->first('dob') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="radio" class="flat" name="gender" id="genderM" value="Male" />Male
                                                <input type="radio" class="flat" name="gender" id="genderF" value="Female" />Female
                                                @if($errors->has('gender'))
                                                <span class="label label-danger">{{ $errors->first('gender') }}
                                                </span>    
                                                @endif        
                                            </div>
                                        </div>


                                        <div class="alert alert-warning alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <i class="fa fa-info-circle"></i> Academic Details
                                        </div>
                                         <div class="form-group">

                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Class<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select3_single form-control" tabindex="-1" name="class">
                                                    <option value=""></option>
                                                    @foreach($classes as $class)
                                                    <option value="{{$class->name}}">{{$class->name}}</option>
                                                    @endforeach                        
                                                </select>                                                
                                                @if($errors->has('class'))                                                               
                                                <span class="label label-danger">{{ $errors->first('class') }}
                                                </span>    
                                                @endif
                                            </div>
                                        </div> 
                                                                                             
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> On Bursary*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="radio" class="flat" name="bursary" id="bursaryN" value="No" checked="" required /> No
                                                <input type="radio" class="flat" name="bursary" id="bursaryY" value="Yes" />Yes
                                                @if($errors->has('bursary'))
                                                <span class="label label-danger">{{ $errors->first('bursary') }}
                                                </span>    
                                                @endif        
                                            </div>
                                        </div>
                                         <div class="form-group" >
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Admission Date<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="date_admitted" class="date-picker form-control col-md-7 col-xs-12" 
                                                       required="required" type="text" name="date_admitted"
                                                       value={{old('date_admitted')}}>
                                                @if($errors->has('date_admitted'))
                                                <span class="label label-danger">{{ $errors->first('date_admitted') }}
                                                </span>    
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Study Mode*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="radio" class="flat" name="study_mode" id="study_modeB" value="Boarding" /> Boarding
                                                <input type="radio" class="flat" name="study_mode" id="study_modeD" value="Day" />Day
                                                @if($errors->has('study_mode'))
                                                <span class="label label-danger">{{ $errors->first('study_mode') }}
                                                </span>    
                                                @endif        
                                            </div>
                                        </div>          
                                       
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Register</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                                
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4",
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                             $('#date_admitted').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4",
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        @include('layouts.footer')
        <!-- /footer content -->

    </div>

</div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- chart js -->
<script src="{{asset('js/chartjs/chart.min.js')}}"></script>
<!-- bootstrap progress js -->
<script src="{{asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
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
<!-- richtext editor -->
<script src="j{{asset('s/editor/bootstrap-wysiwyg.js')}}"></script>
<script src="{{asset('js/editor/external/jquery.hotkeys.js')}}"></script>
<script src="{{asset('js/editor/external/google-code-prettify/prettify.js')}}"></script>
<!-- select2 -->
<script src="{{asset('js/select/select2.full.js')}}"></script>
<!-- form validation -->
<script type="text/javascript" src="{{asset('js/parsley/parsley.min.js')}}"></script>
<!-- textarea resize -->
<script src="{{asset('js/textarea/autosize.min.js')}}"></script>
<script>
        autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="{{asset('js/autocomplete/countries.js')}}"></script>
<script src="{{asset('js/autocomplete/jquery.autocomplete.js')}}"></script>
<script type="text/javascript">
        $(function () {
            'use strict';
            var countriesArray = $.map(countries, function (value, key) {
                return {
                    value: value,
                    data: key
                };
            });
            // Initialize autocomplete with custom appendTo:
            $('#autocomplete-custom-append').autocomplete({
                lookup: countriesArray,
                appendTo: '#autocomplete-container'
            });
        });
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
            placeholder: "Select a Parent/Guardian",
            allowClear: true
        });
        $(".select3_single").select2({
            placeholder: "Select a class/Grade",
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
<!-- editor -->
<script>
    $(document).ready(function () {
        $('.xcxc').click(function () {
            $('#descr').val($('#editor').html());
        });
    });

    $(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                return false;
            })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                        target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        }
        ;

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }
        ;
        initToolbarBootstrapBindings();
        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });
        window.prettyPrint && prettyPrint();
    });
</script>
<!-- /editor -->
</body>
</html>