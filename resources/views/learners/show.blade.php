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
                                <h3><small><a href="{{URL::previous()}}"><i class="fa fa-arrow-circle-left"></i> Back</a></small></h3>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-user"></i> Student's Profile</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a href=""><button class="btn-warning"><i class="fa fa-file-pdf-o"></i> Generate PDF</button></a>
                                            </li>

                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                                            <div class="profile_img">
                                                <!-- end of image cropping -->
                                                <div id="crop-avatar">
                                                    <!-- Current avatar -->
                                                    <div class="avatar-view" title="Change the Photo">
                                                        <?php $path="photos/students/".$learner->photo;?>
                                                       @if(!empty($learner->photo))                                                            
                                                            <img src="{{asset($path)}}" alt="Avatar">
                                                       @else                                                                                                                        
                                                            <img src="{{asset('images/user.png')}}" alt="Avatar">
                                                        @endif                                                  
                                                    </div>

                                                    <!-- Cropping modal -->
                                                    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <form class="avatar-form" action="{{route('update_photo',array('id'=>$learner->id))}}" enctype="multipart/form-data" method="post">
                                                                    <input type="hidden" name="_method" value="PUT">
                                                                    <div class="modal-header">
                                                                        <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                                        <h4 class="modal-title" id="avatar-modal-label">Change Photo</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="avatar-body">

                                                                            <!-- Upload image and data -->
                                                                            <div class="avatar-upload">
                                                                                <input class="avatar-src" name="avatar_src" type="hidden">
                                                                                <input class="avatar-data" name="avatar_data" type="hidden">

                                                                            </div>

                                                                            <!-- Crop and preview -->
                                                                            <div class="row">
                                                                                <div class="col-md-9">

                                                                                    <div class="avatar-preview preview-lg" style=""></div>                                                                                       


                                                                                </div>
                                                                                   <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                                                               
                                                                            </div>

                                                                            <div class="row avatar-btns">
                                                                                <div class="col-md-9">
                                                                                    <div class="btn-group">
                                                                                        <p style="color: red;text-align: center">Note* jpg,png,jpeg,gif</p>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <button class="btn btn-primary btn-block" type="submit">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="modal-footer">
                                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                                    </div> -->
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal -->

                                                    <!-- Loading state -->
                                                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                                </div>
                                                <!-- end of image cropping -->

                                            </div>

                                            <!-- display students info -->
                                            <table class="data table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Student ID</b></td> <td>{!!$learner->id!!}</td>
                                                    <tr>
                                                    <tr>
                                                        <td><b>Name</b></td> <td>{!!$learner->firstname!!}  {!!$learner->lastname!!}</td>
                                                    <tr>
                                                    <tr>
                                                        <td><b>Class</b></td><td>{!!$learner->current_class!!}</td>
                                                    <tr>
                                                    <tr>
                                                        <td><b>Status</b></td><td><span class="label label-success">Active</span></td>
                                                    <tr>
                                                </tbody>
                                            </table>
                                            <!--end students info -->

                                            <br />
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-12">

                                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-info-circle"></i> Personal</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-graduation-cap"></i> Academic</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-user"></i> Guardians</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false"><i class="fa fa-file-o"></i> Documents</a>
                                                    </li>
                                                    <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false"><i class="fa fa-dollar"></i> Fees</a>
                                                    </li>
                                                </ul>
                                                <div id="myTabContent" class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                                        <!-- start student details-->
                                                        <table class="data table table-striped no-margin">
                                                            <thead>
                                                                <tr>

                                                            <div class="x_title">
                                                                <i class="fa fa-info-circle"></i> Personal
                                                                <ul class="nav navbar-right panel_toolbox">
                                                                    <li><a href="{{route('edit_learner',array('id'=>$learner->id))}}"><button class="btn-info"><i class="fa fa-edit"></i>Edit</button></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>First Name</b></td> <td>{!!$learner->firstname!!}</td>    
                                                                    <td><b>Last Name</b></td> <td>{!!$learner->lastname!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Middle Name</b></td> <td>{!!$learner->middlename!!}</td>    
                                                                    <td><b>Gender</b></td> <td>{!!$learner->gender!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Date Of Birth</b></td> <td>{!!date('F d, Y', strtotime($learner->dob))!!}</td>    
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end student details -->

                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                                        <!-- start aacdemic details -->
                                                        <table class="data table table-striped no-margin">
                                                            <thead>
                                                                <tr>
                                                            <div class="x_title">
                                                                <i class="fa fa-info-circle"></i> Academics
                                                                <ul class="nav navbar-right panel_toolbox">
                                                                    <li><a href=""><button class="btn-warning"><i class="fa fa-file-pdf-o"></i>Report Card</button></a>
                                                                    </li>
                                                                    <li><a href="{{route('edit_learner',array('id'=>$learner->id))}}"><button class="btn-info"><i class="fa fa-edit"></i>Edit</button></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>Class</b></td> <td>{!!$learner->current_class!!}</td>    
                                                                    <td><b>Date of Admission</b></td> <td>{!!$learner->date_joined!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Status</b></td> <td>Active</td>    

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                        <!-- end academic details -->

                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">
                                                        <div class="x_title">
                                                            <i class="fa fa-info-circle"></i> Guardians
                                                            <ul class="nav navbar-right panel_toolbox">                                                                    
                                                                <li><a href="{{route('create_parent',array('id'=>$learner->id))}}"><button class="btn-info"><i class="fa fa-user"></i> Add Guardian</button></a>
                                                                </li>
                                                            </ul>
                                                            <div class="clearfix"></div>
                                                        </div>
<?php $count = 1; ?>
                                                        @foreach($learner->guardians as $parent)
                                                        <!-- start parents details -->
                                                        <table class="data table table-striped no-margin">

                                                            <thead>
                                                                <tr>
                                                            <div class="x_title">
                                                                <p style="color: black; font-size: 14px;"><b>{!!$count!!}- {!!$parent->firstname!!} {!!$parent->lastname!!}</b></p>
                                                                <ul class="nav navbar-right panel_toolbox">                                                                    
                                                                    <li><a href="{{route('edit_parent',array('id'=>$parent->id))}}"><button class="btn-info"><i class="fa fa-edit"></i>Edit</button></a>
                                                                    </li>
                                                                    <li><a href=""><button class="btn-danger"><i class="fa fa-trash"></i> Delete</button></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="clearfix"></div>
                                                            </div>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><b>First Name</b></td> <td>{!!$parent->firstname!!}</td>    
                                                                    <td><b>Last Name</b></td> <td>{!!$parent->lastname!!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Relation</b></td> <td>{!!$parent->pivot->relation!!}</td>   
                                                                    <td><b>Occupation</b></td> <td>{!!$parent->occupation!!}</td>                                                          
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Email</b></td> <td>{!!$parent->email!!}</td>   
                                                                    <td><b>Telephone</b></td> <td>{!!$parent->phone!!}</td>                                                          
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Home Address</b></td> <td>{!!$parent->home_address!!}</td>   
                                                                    <td><b>District Of Origin</b></td> <td>{!!$parent->district!!}</td>                                                          
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Office Address</b></td> <td>{!!$parent->office_address!!}</td>   

                                                                </tr>

                                                            </tbody>
                                                        </table>
<?php $count++; ?>
                                                        @endforeach
                                                        <!-- end parents details -->
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3">
                                                        <div class="x_title">
                                                            <i class="fa fa-files-o"></i> Uploaded Documents
                                                            <ul class="nav navbar-right panel_toolbox">
                                                                <li><a href=""><button class="btn-warning"><i class="fa fa-file-pdf-o"></i>Report Card</button></a>
                                                                </li>
                                                                <li><a href="{{route('edit_learner',array('id'=>$learner->id))}}"><button class="btn-info"><i class="fa fa-edit"></i>Edit</button></a>
                                                                </li>
                                                            </ul>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <!-- start docs details -->
                                                        <table class="data table table-striped no-margin">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Category</th>
                                                                    <th>Document Details</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>                                                            
                                                                </tr>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>    
                                                                    <td>Result Slips</td>
                                                                    <td>Student Result Slips</td>
                                                                    <td><span class='label label-success'>Approved</span></td>
                                                                    <td><button class="btn-info"><i class="fa fa-download"></i></button>
                                                                        <button class="btn-danger"><i class="fa fa-trash-o"></i>Delete</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- end docs details -->
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab4">
                                                        <div class="x_title">
                                                            <p style="font-size: 14px; color: black;"><i class="fa fa-dollar"></i> Recently Paid Fees</p>
                                                            <hr style="color: blue; margin-top: 0px;">
                                                        </div>
                                                        <!-- start fees details -->
                                                        <table class="data table table-striped no-margin">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th> 
                                                                    <th>Name</th> 
                                                                    <th>Due Date</th> 
                                                                    <th>Fees Details</th>
                                                                    <th>Total</th>
                                                                    <th>Amount Paid</th>
                                                                    <th>Balance</th>
                                                                <tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>    
                                                                    <td>Tuition</td>
                                                                    <td>12/06/2015</td>
                                                                    <td>School Fees</td>
                                                                    <td>200,000</td>
                                                                    <td>180,000</td>
                                                                    <td>20,000</td>

                                                                </tr>                                                                
                                                            </tbody>
                                                        </table>
                                                        <!-- end fees details -->

                                                        <!-- start payment history -->

                                                        <div class="x_title">
                                                            <p style="font-size: 14px; color: black;"><i class="fa fa-dollar"></i>Fees Payment History</p>
                                                            <hr style="color: blue; margin-top: 0px;">
                                                        </div>

                                                        <table class="data table table-striped no-margin">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th> 
                                                                    <th>Receipt Number</th> 
                                                                    <th>Payment Date</th> 
                                                                    <th>Fees Name</th>
                                                                    <th>Payment Mode</th>
                                                                    <th>Cheque No</th>
                                                                    <th>Amount</th>
                                                                <tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>    
                                                                    <td>3</td>
                                                                    <td>12/06/2015</td>
                                                                    <td>School Fees</td>
                                                                    <td>Cash</td>
                                                                    <td>-</td>
                                                                    <td>100,000</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>    
                                                                    <td>3</td>
                                                                    <td>12/06/2015</td>
                                                                    <td>Development Fee</td>
                                                                    <td>Cash</td>
                                                                    <td>-</td>
                                                                    <td>100,000</td>

                                                                </tr>  
                                                            </tbody>
                                                        </table>
                                                        <!-- end payment history -->

                                                    </div>                               

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- footer content -->
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
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/nprogress.js')}}"></script>
        <script>
NProgress.start();
        </script>
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

        <script src="{{asset('js/custom.js')}}"></script>

        <!-- image cropping -->
        <script src="{{asset('js/cropping/cropper.min.js')}}"></script>
        <script src="{{asset('js/cropping/main.js')}}"></script>


        
    </body>

</html>