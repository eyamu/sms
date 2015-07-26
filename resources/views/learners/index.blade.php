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
                                <h3>
                                   <small><a href="{{URL::previous()}}"><i class="fa fa-arrow-circle-left"></i> Back</a></small>
                                </h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
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
                                    <div class="x_title">
                                        <h2><i class="glyphicon glyphicon-th-list"></i> Students</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a href="{{route('create_learner')}}"><button class="btn-success"><i class="fa fa-plus-circle"></i> ADD</button></a>
                                            </li>
                                            <li><a href=""><button class="btn-warning"><i class="fa fa-file-pdf-o"></i> PDF</button></a>
                                            </li>
                                            <li><a href=""><button class="btn-info"><i class="fa fa-file-excel-o"></i> EXCEL</button></a>
                                            </li>

                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                        <input type="checkbox" class="tableflat">
                                                    </th>
                                                    <th>#</th>
                                                    <th>Names </th>
                                                    <th>Class </th>
                                                    <th class=" no-link last"><span class="nobr"></span>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $count = 1; ?>
                                                @foreach($learners as $learner)
                                                <tr class="even pointer">
                                                    <td class="a-center ">
                                                        <input type="checkbox" class="tableflat">
                                                    </td>
                                                    <td class=" ">{!!$count!!}</td>
                                                    <td class=" "><a href="{{route('show_learner',array('id'=>$learner->id))}}">{!!$learner->firstname!!}  {!!$learner->lastname!!} {!!$learner->middlename!!}</a></td>
                                                    <td class=" ">{!!$learner->current_class!!}</td>
                                                    <td class=" last"><a href="{{route('show_learner',array('id'=>$learner->id))}}"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $count++; ?>
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <br />
                            <br />

                        </div>
                    </div>
                    @include('layouts.footer')
                    <!-- /footer content -->
                </div>
                <!-- /page content -->
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

        <script src="{{asset('js/custom.js')}}"></script>


        <!-- Datatables -->
        <script src="{{asset('js/datatables/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('js/datatables/tools/js/dataTables.tableTools.js')}}"></script>
        <script>
$(document).ready(function () {
    $('input.tableflat').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
});

var asInitVals = new Array();
$(document).ready(function () {
    var oTable = $('#example').dataTable({
        "oLanguage": {
            "sSearch": "Search:"
        },
        "aoColumnDefs": [
            {
                'bSortable': false,
                'aTargets': [0]
            } //disables sorting for column one
        ],
        'iDisplayLength': 10,
        "sPaginationType": "full_numbers",
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "{{asset('js/datatables/tools/swf/copy_csv_xls_pdf.swf')}}"
        }
    });
    $("tfoot input").keyup(function () {
        /* Filter on the column based on the index of this element's parent <th> */
        oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
    });
    $("tfoot input").each(function (i) {
        asInitVals[i] = this.value;
    });
    $("tfoot input").focus(function () {
        if (this.className == "search_init") {
            this.className = "";
            this.value = "";
        }
    });
    $("tfoot input").blur(function (i) {
        if (this.value == "") {
            this.className = "search_init";
            this.value = asInitVals[$("tfoot input").index(this)];
        }
    });
});
        </script>
    </body>

</html>