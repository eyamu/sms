<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\CreateAdminRequest;
use Auth;
 use Hash;
use Session;
use App\User;
use App\School;
use App\Staff;

class WelcomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    /* show login form */

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //check if there is any record added on the admin and whether school info has been added
        if ((\DB::table('users')->first() && \DB::table('school_details')->first())) {
            return view('auth.login')->with('title','SMS|Sign in');
        } else {
            return \Redirect::route('install')->with('title', 'Installation');
        }
    }

    public function create() {
        return view('installation.index')->with('title', 'Installation');
    }

    public function store() {
        if (\Input::get('term') == 'accepted') {
            return \Redirect::route('create_school')->with('title', 'SMS|SetUp School Details');
        } else {
            back();
        }
    }

    /* Create Admin */

    public function create_admin() {
         if (\DB::table('school_details')->first()) {
            //redirect to create admin
            return view('admin.create')->with('title', 'SMS|Admin Creation');
        } else {
            return view('school_setup.create')->with('title', 'SMS|SetUp School Details');
        }
    }

    /**
     * Store a newly created admin in storage.
     *
     * @return Response
     */
    public function store_admin(CreateAdminRequest $request) {
        $username = $request->username;
        $password = $request->password;

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $gender = $request->gender;
        $email = $request->email;


        $user = User::create(array(
                    'username' => $username,
                    'password' => Hash::make($password)
        ));


        $admin = Staff::create(array(
                    'user_id' => $user->id,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'phone' => $phone,
                    'gender' => $gender,
                    'email' => $email
        ));
        if ($admin) {
            $user->staff()->associate($admin);

            return redirect()->route('finish')->with('title', 'SMS|Finish Installation');
        } else {
            return back()->with('error-message', 'Error adding the Admin');
        }
    }
    
    /*Finish Installation*/
     public function display_finish() {
        return view('installation.finish')->with('title', 'Installation');
    }

    public function finish() {      
            return view('auth.login')->with('title', 'SMS|Login');        
    }


    /* login */

    public function authenticate(LoginUserRequest $request) {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            //setting session
            Session::put('username', $request->username);

            return redirect()->intended('dashboard')->with('title', 'SMS|HOME');
        } else {
            return redirect()->route('login')->with('error-message', 'Wrong Username or Password')->with('title', 'SMS|Sign In');
        }
    }

}
