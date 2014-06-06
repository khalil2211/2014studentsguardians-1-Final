@extends('layouts.master')

@section('contents')
<!-- code for jumbotron -->
<div class="container">
    <div class="jumbotron">
        <h3>Welcome
            <span style='color:#3fb618'>
                {{ $currentuser->guardian_fname }}&nbsp;{{ $currentuser->guardian_lname }}
            </span>Select your Student</h3>


    </div>
</div>
@stop
