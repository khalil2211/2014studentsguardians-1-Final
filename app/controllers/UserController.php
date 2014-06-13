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

     *  Authenticate the user
     * edited by khalil

*/
public function  getLogin() {
    return View::make('users.login');

}


    /*
    Authenticate the users edited by khalil, but unable to get login with authenticated users....
    */

    public function  postLogin(){
        // perform the authentication

      //  dd(Input::get('password'));

        if(Auth::attempt(array('username'=>Input::get('username'),'password'=>Input::get('password')))) {
            //test to see if everything is okay


            $loggedguardiamid = Auth::getUser()->u_id;
            //echo "id :" . $loggedgaurdian->u_id . "username :" . $loggedgaurdian->username;

            return Redirect::to('guardians/'. $loggedguardiamid);
        }else {
            return Redirect::to('users/login')
                ->with('loginerrormessage', 'Your username/password combination was incorrect');
            withIinput();

        }



    }



    public function getLogout() {

        Session::flush(); // clear the session

        Auth::logout();

        return Redirect::to('/')->with('message', 'Your are now logged out!');
    }


}
