@extends('layouts.master')

@section('content')
  <!-- page content -->
            <div class="right_col" role="main">

                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-group"></i>Students</span>
                            <div class="count"> {{ $learners->count() }}</div>
                            <span class="count_bottom"><a href="{{route('learners')}}"class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user-md"></i>Staff</span>
                            <div class="count">{{ $staff->count() }}</div>
                            <span class="count_bottom"><a href="{{route('subjects')}}"class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-graduation-cap"></i>Subjects</span>
                            <div class="count">{{$subjects->count()}}</div>
                            <span class="count_bottom"><a href="{{route('subjects')}}"class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-building"></i> Classes & streams</span>
                            <div ><b>Classes</b> ({{$classes->count()}}) <br/> <b>Streams</b> ({{$streams->count()}})</div>
                             <span class="count_bottom"><a href=""class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-pencil"></i> Exams</span>
                            <div class="count">2,315</div>
                            <span class="count_bottom"><a href="{{route('exams')}}"class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-book"></i>Books</span>
                            <div class="count">7,325</div>
                             <span class="count_bottom"><a href=""class="green">More info <i class="fa fa-arrow-right"></i></a> </span>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">
                            <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Quick Links<small></small></h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span><?php echo date('Y-M-D:H:m:s');?></span> 
                                    </div>
                                </div>
                            </div>

                        
                        </div>
                    </div>

                </div>
                <br />

                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="x_panel tile fixed_height_320">
                            <div class="x_title">
                                <h2>Teachers & Staff</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Register new Staff Member</a>
                                            </li>
                                            <li><a href="#">Assign roles to Staff</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="dashboard-widget-content">
                                    <ul class="quick-list">
                                        <li><i class="fa fa-calendar-o"></i><a href="#">Profiles</a>
                                        </li>
                                        <li><i class="fa fa-bars"></i><a href="#">Subjects</a>
                                        </li>
                                        <li><i class="fa fa-bar-chart"></i><a href="#">Classes</a> </li>
                                        <li><i class="fa fa-line-chart"></i><a href="#">Exams</a>
                                        </li>
                                        <li><i class="fa fa-bar-chart"></i><a href="#">Parents</a> </li>
                                        <li><i class="fa fa-line-chart"></i><a href="#">Students</a>
                                        </li>
            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                
                  
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="x_panel tile fixed_height_320">
                            <div class="x_title">
                                <h2>Academics & results</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Go to Students Page</a>
                                            </li>
                                            <li><a href="#">Register Student</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="dashboard-widget-content">
                                    <ul class="quick-list">
                                        <li><i class="fa fa-user"></i><a href="{{route('learners')}}">Learners</a>
                                        </li>
                                        <li><i class="fa fa-file-pdf-o"></i><a href="#">Report Cards</a>
                                        </li>
                                        <li><i class="fa fa-thumbs-up"></i><a href="#">Best Perfomers</a> </li>
                                        <li><i class="fa fa-thumbs-down"></i><a href="#">Worst Performers</a>
                                        </li>
                                        <li><i class="fa fa-dollar"></i><a href="#">Balances</a> </li>
                                        <li><i class="fa fa-line-chart"></i><a href="#">Requirements</a>
                                        </li>
                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="x_panel tile fixed_height_320">
                            <div class="x_title">
                                <h2>Permisions and Roles</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Go to Students Page</a>
                                            </li>
                                            <li><a href="#">View Staff members</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="dashboard-widget-content">
                                    <ul class="quick-list">
                                        <li><i class="fa fa-calendar-o"></i><a href="">New Permission</a>
                                        </li>
                                        <li><i class="fa fa-bars"></i><a href="{{route('create_role')}}">Create New Role</a>
                                        </li>
                                        <li><i class="fa fa-bar-chart"></i><a href="#">Assign Permissions</a> </li>
                                        <li><i class="fa fa-line-chart"></i><a href="{{URL::route('roles')}}">View Roles</a>
                                        </li>
                                        <li><i class="fa fa-bar-chart"></i><a href="#">View Permisions</a> </li>
                                        <li><i class="fa fa-line-chart"></i><a href="#">Last Added</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
   

                        </div>
                    </div>
                </div>
                <!-- /page content -->
   @include('layouts.footer')

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
        <script src="js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
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
@stop