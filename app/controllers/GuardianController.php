<?php

class GuardianController extends \BaseController {


    public function __construct() {
        // protect post request
        $this->beforeFilter('csrf', array('on'=>'post'));
        // only authenticated guardians have access
        $this->beforeFilter('guardianuser');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // find the guardian object with given id
        // so I can get the full name on the nav-bar
        $currentuser = Guardian::find($id);
        // use session variables for master view display
        //Session::put('guardianfirstname',$currentuser->guardian_fname );
        //Session::put('guardianlastname',$currentuser->guardian_lname );
        // return the show.blade.php view
        //return View::make('guardians.show')->with('currentuser', $currentuser);
    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}