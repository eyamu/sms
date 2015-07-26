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

    <!-- Bootstrap core CSS -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/icheck/flat/green.css')}}" rel="stylesheet">


    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">

                  @if ($errors->has())
                                @foreach ($errors->all() as $error)
                                        <div class='alert-danger alert'>{{ $error }}</div>
                                @endforeach
                        @endif

            @if(Session::has('error-message'))
                 <div class="alert alert-error alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{Session::get('error-message')}}
             </div>
            @endif

               @if(Session::has('message'))
                 <div class="alert alert-info alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                {{Session::get('message')}}
             </div>
            @endif

                    <form method="Post" action="{{route('handle_login')}}">
                        <h1>Sign In</h1>
                        <div>
                            <input type="text" name="username" class="form-control" placeholder="Username" required="" value="{{old('username')}}" />
                        </div>
                        <div>
                            <input type="password"  name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                            <button class="btn btn-round btn-info" type="submit" >Log in</button>
                            <a class="reset_pass" href="#toregister">Lost your password?</a>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Enter Email</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

</body>

</html>