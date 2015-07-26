@extends('layouts.master')
@section('content')
   <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Updating School' Information</h3>
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
                                     <h2><small><a href="{{URL::previous()}}"><i class="fa fa-arrow-circle-left"></i> Back</a></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                               
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
                                    <form method="POST" action="{{route('edit_school',array('id'=>$school->id))}}" data-parsley-validate class="form-horizontal form-label-left">
                                    <input type="hidden" name="_method" value="PUT">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">School Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="name" required="required"  name="name" 
                                                 value="{{$school->name}}"
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
                                                           value="{{$school->website}}">
                                                 @if($errors->has('website'))
                                          <span class="label label-danger">{{ $errors->first('website') }}
                                              </span>    
                                                @endif
        
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="moto">Moto 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="moto"  name="moto" 
                                                class="form-control col-md-7 col-xs-12"
                                                           value="{{$school->moto}}">
                                                 @if($errors->has('moto'))
                                          <span class="label label-danger">{{ $errors->first('moto') }}
                                              </span>    
                                                @endif
        
                                            </div>
                                        </div>
                                      <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number*</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'" name="telephone"
                                                 value="{{$school->telephone}}">
                                                @if($errors->has('telephone'))
                                          <span class="label label-danger">{{ $errors->first('telephone') }}
                                              </span>    
                                                @endif
        
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="email" class="form-control col-md-7 col-xs-12" type="email" 
                                                name="email" value="{{$school->email}}">
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
                                                name="address">{{$school->address}}
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
                                                <input id="district" class="form-control col-md-7 col-xs-12" type="text" 
                                                name="district"  value="{{$school->district}}">
                                                 @if($errors->has('district'))
                                          <span class="label label-danger">{{ $errors->first('district') }}
                                              </span>    
                                                @endif        
                                            </div>
                                        </div>
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="reset" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Update School Details</button>
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
                    placeholder: "Select the School Category",
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
            } catch (err) {}
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
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
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
@endsection