<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       5/04/14
 * Time Created :       4:24 PM
 * Version      :       1.0.0
 *
 * Description  :       master file for logged in users
 *
 *=================================================
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <!-- CSS are placed here using Blade syntax -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-cosmo.min.css') }}
    {{ HTML::style('css/mystyles.css') }}
</head>
<body>

<!-- code for navbar -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ URL::to('/') }}" class="navbar-brand">Students/Guardian App with Laravel 4.1</a>
        </div>

        <!-- show guardians menu option -->
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="schools">Guardians
                    <b class="caret"></b></a>
                <ul class="dropdown-menu" aria-labelledby="schools">
                    <!--                    <li><a href= "{{ URL::to('guardians/' . $currentuser->guardian_id) }}" >Show my Students</a></li>-->
                   <!-- <li><a href= "{{ URL::to('guardians/' . Session::get('loggedinuserid')) }}" >Show my Students</a></li> -->
                </ul>
            </li>
        </ul>
        <!-- end guardians menu option -->

        <!-- more nav-bar options -->
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li><a href="#">Help</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="currentuser">Logout Here &nbsp;
                        //{{ Session::get('guardianfirstname') }}&nbsp;{{ Session::get('guardianlastname') }}
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu" aria-labelledby="currentuser">
                        <li><a href="{{ URL::to('users/logout') }}" >Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>  <!-- end  more nav-bar options -->
    </div> <!-- end container-->
</div> <!-- end navbar-->

@yield('heading')

@yield('contents')

<!-- code for footer -->
<div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <p class="navbar-text navbar-right">&copy; 2014 built with PHP and Bootstrap 3+</p>
    </div>
</div>

<!-- javascript -->
{{ HTML::script('js/jquery-2.1.0.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>
