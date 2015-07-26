@extends('layouts.master')
@section('content')
  <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Classes <small></small></h3>
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
                        <div class="col-md-12">
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
                                   <h2><small><a href="{{URL::previous()}}"><i class="fa fa-arrow-circle-left"></i> Back</a></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('create_subject')}}">New Subject</a>
                                                </li>
                                                <li><a href="{{route('create_class')}}">New class/Grade/Standard</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                              <!-- start subject list -->
                                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Name</th>
                                                <th style="width: 20%">#Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count=1;?>
                                      
                                        @foreach($classes as $class)
                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>
                                                    <a href="{{route('show_class',array('id'=>$class->id))}}" data-toggle="tooltip" data-placement="center" title="Click to view More details about this class or grade like Subjects,requirements,Learners and Streams">{{$class->name}}</a>
                                                    <br />
                                                    <small>Created {{date('F d, Y H:m:s a', strtotime($class->created_at))}}</small>
                                                </td>                                           
                                                <td>
                                                    <a href="{{route('create_stream',array('id'=>$class->id))}}" class="btn btn-primary btn-xs"><i class="fa fa-university"></i>Add Stream </a>
                                                     <a href="{{route('assign_subjects',array('id'=>$class->id))}}" class="btn btn-primary btn-xs"><i class="fa fa-check"></i>Add Subjects </a>
                                                    <a href="{{route('edit_class',array('id'=>$class->id))}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                                </td>
                                            </tr>
                                            <?php $count++;?>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                    <!-- end project list -->

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

        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!-- chart js -->
        <script src="{{asset('js/chartjs/chart.min.js')}}"></script>
        <!-- bootstrap progress js -->
        <script src="{{asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <!-- icheck -->
        <script src="{{asset('js/icheck/icheck.min.js')}}"></script>

        <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
@stop