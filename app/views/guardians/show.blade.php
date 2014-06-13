@extends('layouts.master')

@section('contents')
<!-- code for jumbotron -->
<div class="container">
    <div class="jumbotron">
        <h3>Welcome
            <span style='color:#3fb618'>
                {{ $currentuser->g_fname }}&nbsp;{{ $currentuser->g_lname }}
            </span>Select your Student</h3>
<!--        <br>-->
<!--        @foreach($currentuser->studentslist as $tempstudent)-->
<!--           <!-- display hyperlink of students -->-->
<!--           {{ HTML::link('students/'.$tempstudent->s_id , $tempstudent->s_fname, array('class' => 'btn btn-lg btn-success student-list'))}}-->
<!--        @endforeach-->

    </div>
</div>
@stop
