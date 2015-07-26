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
                                
                                 <li><a><i class="fa fa-wrench"></i>Configurations</a>                                   
                                </li>                
                                <li><a href="{{route('subjects')}}"><i class="fa fa-graduation-cap"></i>Subjects/Courses</a>                                 
                                </li>
                                 <li><a href="{{route('reports')}}"><i class="fa fa-file-pdf-o"></i>Reports</a>                                 
                                </li>
                                 <li><a href="{{route('fees')}}"><i class="fa fa-dollar"></i>Fees</a>                                   
                                </li>
                                <li><a href="{{route('learners')}}"><i class="fa fa-group"></i>Learners</a>                                    
                                </li>

                                <li><a><i class="fa fa-table"></i> Exams & Time tables</a>
                                    
                                </li>
                                <li><a href="{{route('create_teacher')}}"><i class="fa fa-user-md"></i>Employees</a>
                                   </li>
                                
                                <li><a><i class="fa fa-book"></i> Library & Reading</a>
                                    
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

      @yield('content')
