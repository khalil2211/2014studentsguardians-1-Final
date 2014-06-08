<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       18/01/14
 * Time Created :       2:50 PM
 * Version      :       1.0.0
 *
 * Description  :       The logon page for a user
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
            <a href="{{ URL::to('/') }}" class="navbar-brand">Students/Gaurdian App with Laravel 4.1</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Code by Stephanj - 2014 &copy;</a></li>
            </ul>
        </div>
    </div> <!-- end container-->
</div> <!-- end navbar-->

<!-- login form -->
<div class="col-md-offset-4 col-md-4">
    <div class="page-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Login</h2>
            </div>
        </div>
    </div> <!-- end page header-->

    @if(Session::has('loginerrormessage'))
    <div class="alert alert-danger">
        <!-- if there are login errors, they will show here -->
        {{ Session::get('loginerrormessage') }}
    </div>
    @endif

    <!-- this will call the store method of StudentController -->
    {{ Form::open(array('url' => 'users/login')) }}
        <div class="form-group">
            {{ Form::label('usernameinput', 'Your Username') }}
            {{ Form::text('username', Input::old('username'),
            array('class' => 'form-control',
            'placeholder' => 'e.g. khalil')) }}
        </div>

        <div class="form-group">
            {{ Form::label('passwordinput', 'Your Password') }}
            {{ Form::password('password',
            array('class' => 'form-control',
            'placeholder' => 'Password')) }}
        </div>
    {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}

</div> <!-- end login form -->

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
