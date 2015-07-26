<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>@if(isset($title))
            {{$title}}
            @endif
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-toggle"></span>
                    </button>
                   
                </div>
                <div class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                      
                        
                    </ul>
                     
                </div>
            </div><!-- /container -->
        </div>
        <!-- /Header -->

        <div class="container">

            <!-- upper section -->
            <div class="row">
                <div class="col-sm-3">
                </div><!-- -->
                <div class="col-sm-9">

                    <!-- column 2 -->	
                    <h3> Step 1 -Terms & Conditions</h3>  

                    <hr style="color: orange;">

                    <div class="row">
                        <!-- center left-->	
                        <div class="col-md-12">


                            <hr>

                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Installation Details</h4></div>
                                <div class="panel-body">
                                    <form method="post" action="{{route('install')}}">
                                        <pre style="height: 250px;overflow-y: scroll;">

SMS- School Management System
	
Developed by Joel Eyamu
    
Copyright (C) 2015 Joel Eyamu|joeleyamu@gmail.com |256784 197545
	
This program is custom for Ugandan Schools: you cannot distribute it without the attention of the 
owner.Feel free to contact me incase you want to distribute it.

This program is distributed in the hope that it will be useful especially for Ugandan schools,
It automates almost all the business processes in schools for example:
1. Students record management
2. Staff records Management
3. Financial record management
4. Students Results management and Report card generation.
5.Subjects Management
You should have received permission to install this program from the owner inorder for you to use
 it. 
 
                                        </pre>
                                        <input type="checkbox" name="term" value="accepted" class="flat" required> Agree 
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="form-group">
                                            <input type="submit" value="NEXT" class="btn-success">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                
<footer class="text-center">Joel Eyamu &COPY;<?php echo date('Y');?></strong></a></footer>
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
           <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
                                </body></html>
