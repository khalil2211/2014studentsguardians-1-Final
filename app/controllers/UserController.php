<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       18/01/14
 * Time Created :       2:46 PM
 * Version      :       1.0.0
 *
 * Description  :       Controller for authenticated users
 *
 *=================================================
 */

class UserController extends BaseController {

    public function __construct() {
        // protect post request
        $this->beforeFilter('csrf', array('on'=>'post'));
    }


    /*
     *   Method called to display logon page for user
     *   Preface the method with the get verb
     * edited by khalil
     */
    public function getLogin() {
        return View::make('users.login');
    }



    /*
     *  Authenticate the user
     * edited by khalil



    public function postLogin() {
        // perform the authentication
        if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
            // get the authenticated user's id
            $loggedguardiamid = Auth::getUser()->id;
            // store the id of the logged in user for latter use
            Session::put('loggedinuserid',$loggedguardiamid);

            // redirect to the GuardianController show($id) method
            return Redirect::to('guardians/'. $loggedguardiamid);

        } else {
            return Redirect::to('users/login')
                ->with('loginerrormessage', 'Your username/password combination was incorrect')
                ->withInput();
        }
    }
*/

    public function getLogout() {

        Session::flush(); // clear the session

        Auth::logout();

        return Redirect::to('/')->with('message', 'Your are now logged out!');
    }


}