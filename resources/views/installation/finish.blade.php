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

        <!-- Custom styling plus plugins -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
       

        <link href="{{asset('css/installation.css')}}" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body

        <div class="installation-box-body installation-header">
            <h1>Finish: SMS Installation</h1>
        </div>
        <div class="installation-box-body">
            <h3>Welcome To SMS</h3>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                       
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <p>Thank you. You have successfully set up the SMS, a powerful School Management System.
                                Hope it will help you with any school management Issues. feel free to give me feedback on my email joeleyamu@gmail.com or Mobiles +256 784/752 197545                           
                            </p>                           
                        </div>
                       
                        <form method="post" action="{{URL::route('finish')}}" data-parsley-validate class="form-horizontal form-label-left">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                   
                                    <button type="submit" class="btn btn-success">Finish</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="installation-box-body installation-header">
                <p style="text-align: center">Copyright (C) 2015 Joel Eyamu|joeleyamu@gmail.com |256784 197545  </p>         
            </div>
        </div>
    </div>


</div>
</body>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>