<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSchoolRequest;
use App\School;

class SchoolController extends Controller {

    private $school;

    public function __construct(School $school) {

        $this->school = $school;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //check if there is any record added on the admin and whether school info has been added
        if ((\DB::table('users')->first() && \DB::table('school_details')->first())) {
            return \Redirect::route('login')->with('SMS|Sign in');
        } else {
            return \Redirect::route('create_school')->with('title', 'Installation');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //check if there is any school registered,redirect to create school if there is no school registred
        if (\DB::table('school_details')->first()) {
            //redirect to create admin
            return \Redirect::route('create_admin')->with('title', 'SMS|Admin Creation');
        } else {
            return view('school_setup.create')->with('title', 'SMS|SetUp School Details');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateSchoolRequest $request) {
        $created = $this->school->create($request->all());

        if ($created) {
            return \Redirect::route('create_admin')
                            ->with('message', 'School successfuly set up!');
        } else {
            return \Redirect::route('create_school')
                            ->with('error-message', 'Failed to Set up school, try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $school = $this->school->find($id);
        return view('school_setup.edit')->with('school', $school);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\UpdateSchoolRequest $request, $id) {
        $school = $this->school->find($id);
        $updated = $school->fill($request->input())->save();

        if ($updated) {
            return \Redirect::route('school')
                            ->with('message', 'School successfuly Updated!');
        } else {
            return \Redirect::route('edit_school', $id)
                            ->with('error-message', 'Failed to Update School details!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function change_logo(Requests\ChangePhotoRequest $request) {
        $extension = $request->avatar_file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename() . '.' . $extension, File::get($request->avatar_file));
        $school = School::find($request->school);
        //$school->mime = $file->getClientMimeType();
        //$entry->original_filename = $file->getClientOriginalName();
        $school->logo = $file->getFilename() . '.' . $extension;

        $school->save();
        return \Redirect::route('school')
                        ->with('message', 'Logo successfuly Changed!');
    }

}
