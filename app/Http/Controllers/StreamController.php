<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateStreamRequest;
use App\Grade;
use App\Stream;

class StreamController extends Controller {

    private  $stream;
    
    
    public function __construct(Stream $stream) {
        $this->stream=$stream;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id) {
        //
        $class = Grade::find($id);
        return view('streams.create')->with('title', 'SMS|Adding streams')->with('class', $class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateStreamRequest $request) {
        $stream = $this->stream->create(array(
            'name' => $request->name
        ));

        $class = Grade::find($request->id);

        $stream = $class->streams()->save($stream); //update foreign keys
        if ($stream) {
            return \Redirect::route('classes')
                            ->with('message', 'Stream successfuly registered!');
        } else {
            return \Redirect::route('create_stream')
                            ->with('error-message', 'Failed to Add Stream!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
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

}
