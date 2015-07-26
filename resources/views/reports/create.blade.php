@extends('layouts.master')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                   All Learners
                </h3>
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
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('create_learner')}}">Register New Learner</a>
                                                </li>
                                                <li><a href="#">Go to Results</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form method="post" action="{{route('create_results')}}">
                                          <div class="form-group">
                                            <label >Exam*</label>                                                
                                            <input type="radio" class="flat" name="exam" id="exam1" value="BOT" required />BOT
                                            <input type="radio" class="flat" name="exam" id="exam2" value="MT" />Mid Term
                                            <input type="radio" class="flat" name="exam" id="exam3" value="EOT" />EOT
                                             @if($errors->has('gender'))
                                          <span class="label label-danger">{{ $errors->first('gender') }}
                                              </span>    
                                                @endif        
                                              </div>
                                          <div class="form-group">
                                            <label>Term*</label>
                                           
                                            <input type="radio" class="flat" name="term" id="term1" value="1" required />1
                                            <input type="radio" class="flat" name="term" id="term1" value="2" />2
                                            <input type="radio" class="flat" name="term" id="term1" value="3" />3
                                             @if($errors->has('term'))
                                          <span class="label label-danger">{{ $errors->first('term') }}
                                              </span>    
                                                @endif        
                                            
                                        </div>
                                   
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>#</th>
                                                <th>Names </th>
                                                <th>Gender</th>
                                                  <th>Study Mode </th>
                                                    <th>D.O.B</th>
                                                 <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                         <?php $count=1;?>
                                        @foreach($class->students as $learner)
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                                <td class=" ">{!!$count!!}</td>
                                                <td class=" ">{!!$learner->firstname!!}  {!!$learner->lastname!!} {!!$learner->middlename!!}</td>
                                                <td class=" ">{!!$learner->gender!!}
                                                </td>
                                                <td class=" ">{!!$learner->study_mode!!}</td>
                                                <td class=" "></td>
                                              <td class=" last"> <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="text" id="result"  name="result" 
                                                required="required"  value={{old('result')}}>
                                                        <button type="submit" class="btn btn-info btn-xs"
                                                                data-toggle="tooltip" data-placement="center" title="Enter marks for this student in the text field"><i class="fa fa-check"></i></button>
                                                    </form>  
                                              </td>
                                              
                                            </tr>
                                             <?php $count++;?>
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
@endsection