<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//    $g = Guardian::find(1);
////    $g->getstudents()->attach(501);
//    print $g->guardian_fname;
//   // print $g->getstudents;
//    foreach ($g->getstudents as $temp){
//        print $temp->student_firstname;
//    }
//});



/*
 * The homepage call the showHomepage function of the
 * HomeController
 */
Route::get('/', 'HomeController@showHomepage');

/*
 * The  route for UsersController called users
 * it is not a resource controller since it will only
 * control login and logout
 */
Route::controller('users', 'UserController');

/*
 * resource controller for the guardians
 * edited by khalil

Route::resource('guardians', 'GuardianController');
*/

