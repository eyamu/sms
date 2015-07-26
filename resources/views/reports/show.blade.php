<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@if(isset($title)) 
            {{$title}}
            @endif

    </title>

     <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />  
</head>
  <div class="row">
    <ul class="small-block-grid-3">
      <li style="text-align:center;" class="report-content">
         <img src="{{asset('images/school_logo.png')}}" width="144px" height="120px">
      </li>
        <li style="text-align:center;">
          <h5  style="color:blue;"><b>{!!$school->name!!}</br>
        {!!$school->category!!}<br/>
        </b>
      </h5>
      <p>
        Website:{!!$school->website!!}<br/>        
        Tel: {!!$school->telephone!!}<br/>
        {!!$school->address!!}</br/>
        {!!$school->email!!}
      </p>
        </li>
    </ul>
  </div>
   <div class="row">
    <div class="small-12">
      <hr style="border:2px solid #59574A;" class="div_show">
    </div>
  </div>

  <div class="row">
    <ul class="small-block-grid-3">
      <li style="text-align:justify;" class="report-content">
        <b>NAME:</b> <span>NAMUYIGA Sheillah</span><br/>
        <b>AGE:</b> <span>12</span><br/>
        <b>SEX:</b> <span>FEMALE</span><br/>
        <b>STREAM:</b> <span>BEMBA</span><br/>
        <b>RELIGION:</b> <span>CATHOLIC</span>
      </li>
        <li style="text-align:center;">
          <img src="{{asset('images/student.jpg')}}" width="144px" height="120px" 
          style="border-radius:50%; border: 1px solid #FFF;" class="div_show">
        </li>
      <li  style="text-align:justify;" class="report-content">
        <b>Class:</b> <span>Primary Six</span><br/>
        <b>Term:</b> <span>III</span><br/>
        <b>Year:</b> <span>2015</span><br/>         
        <b>Class Teacher:</b> <span>Mr. Ssenubulya Joseph Mary</span><br/>
        <b>Gaurdian Name:</b> <span>Mr. Kirigwajjo Noah</span>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="small-12 report-content">
      <table width="100%" border="1" role="grid" cellspacing="0" cellpadding="0"
      style="border:1px solid #59574A;">
        <caption>
          <h4  class="report-content" style="font-size:12px;">
            <b><u>TERM III RESULTS</u></b>
          </h4>
        </caption>
        <thead>
                    <tr>
                        <th width="16%">SUBJECT</th>
                        <th width="14%">FULL MARKS</th>
                        <th width="8%">BOT</th>
                        <th width="8%">MOT</th>
                        <th width="8%">AVG</th>
                        <th width="8%">GRADE</th>
                        <th width="20%">TEARCHER'S REMARK</th>
                        <th width="10%">INITIALS</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                       <td><b>SST</b></td> 
                       <td>80</td>
                       <td>40</td>
                       <td>90</td>
                       <td>70</td>
                       <td>B</td>
                       <td>Good</td>
                       <td>JE</td>
                    </tr>                    
                              
                                 <tr>
                       <td><b>English</b></td> 
                       <td>80</td>
                       <td>40</td>
                       <td>90</td>
                       <td>70</td>
                       <td>B</td>
                       <td>Good</td>
                       <td>JE</td>
                    </tr>     
                       <tr>
                       <td><b>Science</b></td> 
                       <td>80</td>
                       <td>40</td>
                       <td>90</td>
                       <td>70</td>
                       <td>B</td>
                       <td>Good</td>
                       <td>JE</td>
                    </tr>     
                       <tr>
                       <td><b>Mathematics</b></td> 
                       <td>80</td>
                       <td>40</td>
                       <td>90</td>
                       <td>70</td>
                       <td>B</td>
                       <td>Good</td>
                       <td>JE</td>
                    </tr>            
                </tbody>
      </table>
    </div>
  </div>  
  <div class="row">
    <div class="small-12 report-content">
      <ul class="small-block-grid-3">
          <li>
            <p class="report-content">POSITION: 
              .......................</p>
          </li>
        <li>
          <p class="report-content">OUT OF:
            ......................</p>
        </li>
        <li>
          <p class="report-content">DIVISION:
            ...................</p>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="small-12 report-content">     
      <p>Class Teacher's comment:
        .................................................................................
        ........................
      <span style="float:right;">
        Signature: ................................................................</span>
      </p>
      <p>Headteacher's comment:
        .................................................................................
        ........................
      <span style="float:right;">
        Signature: .................................</span>
      </p>
    </div>
  </div>
  <div class="row"> 
    <div class="small-12 report-content">
      <p>Next Term Begins On:
        .......................
        And Ends On:
        ....................
      </p>
    </div>
  </div>
  <div class="row">
    <div class="small-12">
      <hr style="border:2px solid #59574A;" class="div_show">
    </div>
  </div>
  <div class="row">
  <div class="small-6 small-centered columns">
      <p style="color:red;" class="report-content"
      ><b>This report card is NOT VALID  without the school stamp</b></p>
    </div>
  </div>
    <div class="small-12 columns">
      <p style="font-size:12px;text-align:center;" class="report-content">
        <b>&copy; Copyright <?php echo date('Y');?>
        Cosna School.  SMS, Joel Eyamu(joeleyamu@gmail.com)</b>
      </p>
    </div>
  </div>
</div>  
</body>
</html>