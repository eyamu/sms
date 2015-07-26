@extends('layouts.master')
@section('content')

<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Parent's Profile</h3>
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
                        <h2>Parent<small>Details</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">View Report Card</a>
                                    </li>
                                    <li><a href="#">Prepare Report card</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <br />
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <?php
                                $tab_count = 2;
                                $tab_name = "#tab_content";
                                ?>                                   
                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">All Learners </a>
                                </li>
                                @foreach($classes as $class)                          
                                <li role="presentation" class=""><a href="<?php echo $tab_name . $tab_count ?>" id="profile-tab" role="tab" data-toggle="tab" aria-expanded="false">{{$class->name}} </a>
                                </li>                                

<?php $tab_count++; ?>
                                @endforeach
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>#</th>
                                                <th>Names </th>
                                                <th>Current Class </th>
                                                <th>Gender</th>
                                                <th>Study Mode </th>
                                                <th>D.O.B</th>
                                                <th>First Registration </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
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
                                                <td class=" ">{!!$learner->firstname!!}  {!!$learner->lastname!!} {!!$learner->middlename!!}</td>
                                                <td class=" ">{!!$learner->current_class!!}</td>
                                                <td class=" ">{!!$learner->gender!!}
                                                </td>
                                                <td class=" ">{!!$learner->study_mode!!}</td>
                                                <td class=" ">{!!date('F d, Y ', strtotime($learner->dob))!!}</td>
                                                <td class="a-right a-right "> {{date('F d, Y H:m:s a', strtotime($learner->created_at))}}</td>
                                                <td class=" last"><a href="{{route('show_learner',array('id'=>$learner->id))}}">More...</a>
                                                </td>
                                            </tr>
<?php $count++; ?>
                                            @endforeach

                                        </tbody>
                                    </table>                                       
                                </div>

                                 <?php $content_id_count=2;
                                       $content_name="tab_content";
                                    
                                 ?>
                              @foreach($classes as $class) 
                              <?php
                              //picking the learners for a particular class
                              $learners=$class->students;
                             
                              ?>
                              
                                <div role="tabpanel" class="tab-pane fade" id="<?php echo $content_name.$content_id_count; ?>" aria-labelledby="profile-tab">
             
                              
                                    <table id="<?php echo $content_name.$content_id_count; ?>" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>#</th>
                                                <th>Names </th>
                                                <th>Current Class </th>
                                                <th>Gender</th>
                                                <th>Study Mode </th>
                                                <th>D.O.B</th>
                                                <th>First Registration </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
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
                                                <td class=" ">{!!$learner->firstname!!}  {!!$learner->lastname!!} {!!$learner->middlename!!}</td>
                                                <td class=" ">{!!$learner->current_class!!}</td>
                                                <td class=" ">{!!$learner->gender!!}
                                                </td>
                                                <td class=" ">{!!$learner->study_mode!!}</td>
                                                <td class=" ">{!!date('F d, Y ', strtotime($learner->dob))!!}</td>
                                                <td class="a-right a-right "> {{date('F d, Y H:m:s a', strtotime($learner->created_at))}}</td>
                                                <td class=" last"><a href="{{route('show_learner',array('id'=>$learner->id))}}">More...</a>
                                                </td>
                                            </tr>
<?php $count++; ?>
                                            @endforeach

                                        </tbody>
                                    </table>        
                                </div>
                                 <?php $content_id_count++; ?>
                               @endforeach
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