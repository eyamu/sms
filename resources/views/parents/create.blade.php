@extends('layouts.master')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Parent Registration</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Parents<small> being registered</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{URL::to('parents/index')}}">View Parents List</a>
                                    </li>
                                    <li><a href="{{URL::to('students/create')}}">Add Student</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
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
                        <form method="post" action="{{route('create_parent',array('id'=>$student->id))}}" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"  name="firstname" 
                                           value="{{old('firstname')}}"
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Other Name 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="middle_name" name="middlename" value="{{old('middlename')}}" 
                                           class="form-control col-md-7 col-xs-12">
                                    @if($errors->has('middlename'))
                                    <span class="label label-danger">{{ $errors->first('middlename') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '9999 999 999'" name="phone"
                                           value="{{old('phone')}}">
                                    @if($errors->has('phone'))
                                    <span class="label label-danger">{{ $errors->first('phone') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Occupation*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="occupation" class="form-control col-md-7 col-xs-12" type="text" 
                                           name="occupation" value="{{old('occupation')}}">
                                    @if($errors->has('occupation'))
                                    <span class="label label-danger">{{ $errors->first('occupation') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="relation">Relation <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_single form-control" tabindex="-1" name="relation">
                                        <option value=""></option>
                                        <option value="Dad">Dad</option>   
                                        <option value="Mom">Mom</option>  
                                        <option value="Uncle">Uncle</option> 
                                        <option value="Aunty">Aunty</option> 
                                        <option value="Brother">Brother</option>   
                                        <option value="Sister">Sister</option>  
                                        <option value="Grand Dad">Grand Dad</option> 
                                        <option value="Grand Mom">Grand Mom</option>
                                        <option value="Friend">Friend</option> 
                                        <option value="Neighbor">Neighbor</option> 
                                        <option value="Others">Others</option> 
                                    </select>                                                
                                    @if($errors->has('relation'))                                                              
                                    <span class="label label-danger">{{ $errors->first('relation') }}
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
                                <label for="home_address" class="control-label col-md-3 col-sm-3 col-xs-12">Home Address*</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="home_address" class="form-control col-md-7 col-xs-12" type="text" 
                                              name="home_address"  value="{{old('home_address')}}">
                                    </textarea>
                                    @if($errors->has('home_address'))
                                    <span class="label label-danger">{{ $errors->first('home_address') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="office_address" class="control-label col-md-3 col-sm-3 col-xs-12">Office Address</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="office_address" class="form-control col-md-7 col-xs-12" type="text" 
                                              name="office_address"  value="{{old('office_address')}}">
                                    </textarea>
                                    @if($errors->has('office_address'))
                                    <span class="label label-danger">{{ $errors->first('office_address') }}
                                    </span>    
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="district" class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="district" class="form-control col-md-7 col-xs-12" type="text" 
                                           name="district"  value="{{old('district')}}">
                                    @if($errors->has('district'))
                                    <span class="label label-danger">{{ $errors->first('district') }}
                                    </span>    
                                    @endif        
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="student_id" value="{{$student->id}}">

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                     <button type="submit" class="btn btn-success">Register Parent</button>
                                   
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
                    calender_style: "picker_4"
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
            placeholder: "Select Relationship",
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
@stop