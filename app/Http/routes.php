<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*responsible for login of the user*/
Route::group(array('middleware'=>'guest'),function(){

   Route::get('/', array('as'=>'login',
                 'uses'=>'WelcomeController@index'));
  Route::post('/', 
            array('as'=>'handle_login',
               'uses'=>'WelcomeController@authenticate'));
  
  /*Installation  step1- display the Agreement*/  
  Route::get('installation-step-1', array('as'=>'install',
                 'uses'=>'WelcomeController@create'));
  
  Route::post('installation-step-1', array('as'=>'install',
                 'uses'=>'WelcomeController@store'));
  
  /*Installation  step2- Create school*/   
  Route::get('installation-step-2', array(
               'as' => 'create_school', 
               'uses' => 'SchoolController@create'
               ));
  
Route::post('installation-step-2', array(
               'as' => 'create_school', 
               'uses' => 'SchoolController@store'
               ));
  
 /*Installation  step3- Create School admin*/   
     Route::get('installation-step-3',array('as' => 'create_admin',
                                   'uses' => 'WelcomeController@create_admin'
                                   ));
     Route::post('installation-step-3', array(
                    'as' => 'create_admin', 
                    'uses' => 'WelcomeController@store_admin'
                    ));
     
     /*Installation  Finish- Finish*/   
     Route::get('installation-step-4',array('as' => 'finish',
                                   'uses' => 'WelcomeController@display_finish'
                                   ));
     Route::post('installation-step-4', array(
                    'as' => 'finish', 
                    'uses' => 'WelcomeController@finish'
                    ));
     
});

/*admins*/

Route::group(array('middleware' =>'auth'), function()
{
   Route::get('dashboard',array('as' => 'dashboard',
                              'uses' => 'AdminController@index'
                              ));

      Route::get('profile/edit/{id}',array('as' => 'edit_admin',
                                   'uses' => 'AdminController@edit'
                                   ));

     Route::put('profile/edit/{id}', array(
                    'as' => 'edit_admin', 
                    'uses' => 'AdminController@update'
                    ));
     

  Route::get('/logout', array(
                    'as' => 'logout', 
                    'uses' => 'AdminController@logout'
                    ));

  Route::get('exams/time_tables',array(
                       'as'=>'time_tables',
                        'uses'=>'AdminController@view_timetables'));

  
   Route::get('profiles/{id}',array(
                       'as'=>'show_profile',
                        'uses'=>'AdminController@show'));

  
  //staff
  Route::get('teachers/create',array('as' => 'create_teacher',
                              'uses' => 'TeachersController@create'
                              ));

     Route::post('teachers/create',array('as' => 'create_teacher',
                                   'uses' => 'TeachersController@store'
                                   ));
  /*Learners*/
   /*
  Route::resource('learners','LearnersController',
                      ['names'=>['index'=>'learners',
                                'create'=>'create_learner',
                                'show'=>'show_learner',
                                'edit'=>'edit_learner'],
                        'only'=>['index','create','show','edit']
  
                      ]);
                      */

 
Route::get('learners/index',array('as' => 'learners',
                              'uses' => 'LearnersController@index'
                              ));

Route::get('learners/create',array('as' => 'create_learner',
                              'uses' => 'LearnersController@create'
                              ));
Route::post('learners/create', array(
               'as' => 'create_learner', 
               'uses' => 'LearnersController@store'
               ));

Route::get('learners/show/{id}', array(
               'as' => 'show_learner', 
               'uses' => 'LearnersController@show'
               ));
Route::get('learners/edit/{id}', array(
               'as' => 'edit_learner', 
               'uses' => 'LearnersController@edit'
               ));

Route::put('learners/edit/{id}', array(
               'as' => 'update_learner', 
               'uses' => 'LearnersController@update'
               ));

Route::post('learners/assign-stream', array(
               'as' => 'assign_stream', 
               'uses' => 'LearnersController@assign_stream'
               ));

//change photo
Route::put('learners/show/{id}', array(
               'as' => 'update_photo', 
               'uses' => 'LearnersController@change_photo'
               ));

/*Subjects*/
Route::get('subjects/index',array('as' => 'subjects',
                              'uses' => 'SubjectsController@index'
                              ));

Route::get('subjects/create',array('as' => 'create_subject',
                              'uses' => 'SubjectsController@create'
                              ));
Route::post('subjects/create',array('as' => 'create_subject',
                              'uses' => 'SubjectsController@store'
                              ));

Route::get('subjects/edit/{id}',array('as' => 'edit_subject',
                              'uses' => 'SubjectsController@edit'
                              ));
Route::put('subjects/edit/{id}',array('as' => 'edit_subject',
                              'uses' => 'SubjectsController@update'
                              ));

/*Reports & results*/
Route::get('Reports/show', array(
               'as' => 'reports', 
               'uses' => 'ReportController@index'
               ));


Route::get('Reports/create/{subject_id}/{class_id}', array(
               'as' => 'create_results', 
               'uses' => 'ReportController@create'
               ));

Route::post('Reports/create', array(
               'as' => 'create_results', 
               'uses' => 'ReportController@store'
               ));



/*Roles*/
Route::get('roles/index', array(
               'as' => 'roles', 
               'uses' => 'RolesController@index'
               ));

Route::get('roles/create', array(
               'as' => 'create_role', 
               'uses' => 'RolesController@create'
               ));

Route::post('roles/create', array(
               'as' => 'create_role', 
               'uses' => 'RolesController@store'
               ));


/*Parents*/
Route::get('parents/index', array(
               'as' => 'parents', 
               'uses' => 'ParentsController@index'
               ));

Route::get('parents/create/{id}', array(
               'as' => 'create_parent', 
               'uses' => 'ParentsController@create'
               ));

Route::post('parents/create/{id}', array(
               'as' => 'create_parent', 
               'uses' => 'ParentsController@store'
               ));

Route::get('parents/edit/{id}', array(
               'as' => 'edit_parent', 
               'uses' => 'ParentsController@edit'
               ));
Route::put('parents/edit/{id}', array(
               'as' => 'edit_parent', 
               'uses' => 'ParentsController@update'
               ));
Route::get('parents/show/{id}', array(
               'as' => 'show_parent', 
               'uses' => 'ParentsController@show'
               ));

/*School Setup*/

Route::get('school_setup/edit/{id}',array('as' => 'edit_school',
                              'uses' => 'SchoolController@edit'
                              ));
Route::put('school_setup/edit/{id}',array('as' => 'edit_school',
                              'uses' => 'SchoolController@update'
                              ));

Route::post('school_setup/change_logo',array('as' => 'change_logo',
                              'uses' => 'SchoolController@change_logo'
                              ));

/*classes*/

Route::get('classes/index', array(
               'as' => 'classes', 
               'uses' => 'ClassesController@index'
               ));

Route::get('classes/create', array(
               'as' => 'create_class', 
               'uses' => 'ClassesController@create'
               ));

Route::post('classes/create', array(
               'as' => 'create_class', 
               'uses' => 'ClassesController@store'
               ));

Route::get('classes/edit/{id}',array('as' => 'edit_class',
                              'uses' => 'ClassesController@edit'
                              ));
Route::put('classes/edit/{id}',array('as' => 'edit_class',
                              'uses' => 'ClassesController@update'
                              ));
Route::get('classes/show/{id}', array(
               'as' => 'show_class', 
               'uses' => 'ClassesController@show'
               ));

Route::get('classes/assign-subjects/{id}', array(
               'as' => 'assign_subjects', 
               'uses' => 'ClassesController@get_subjects'
               ));


Route::post('classes/assign-subjects/{id}', array(
               'as' => 'assign_subjects', 
               'uses' => 'ClassesController@assign_subjects'
               ));


/*streams*/
Route::get('streams/create/{id}', array(
               'as' => 'create_stream', 
               'uses' => 'StreamController@create'
               ));

Route::post('streams/create/{id}', array(
               'as' => 'create_stream', 
               'uses' => 'StreamController@store'
               ));

Route::get('exams/index',array('as'=>'exams',
                            'uses'=>  'ExamTypeController@index'));

/*fees*/
Route::get('fees/index', array(
               'as' => 'fees', 
               'uses' => 'FeesController@index'
               ));


});


