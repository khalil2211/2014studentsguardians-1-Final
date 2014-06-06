<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       18/01/14
 * Time Created :       11:55 AM
 * Version      :       1.0.0
 *
 * Description  :       Home page of our Application.
 *                      The FIRST page the user will see
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
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Code by Stephanj - 2014 &copy;</a></li>
            </ul>
        </div>
    </div> <!-- end container-->
</div> <!-- end navbar-->

<!-- code for jumbotron -->
<div class="container">
    <div class="jumbotron">
        <!-- logout message -->
        @if(Session::has('message'))
            <p class="alert alert-success alertextra">{{ Session::get('message') }}</p>
        @endif
        <h3>Welcome to Laravel 4.1 with Bootstrap 3.1</h3>
        <p><a class="btn btn-lg btn-success" href="{{ URL::to('users/login') }}">Click here to Log in</a></p>
    </div>
</div>

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
