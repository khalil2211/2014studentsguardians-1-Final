<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       6/04/14
 * Time Created :       11:36 AM
 * Version      :       1.0.0
 *
 * Description  :       
 *
 *=================================================
 */

class Student extends Eloquent{

    // table name
    protected $table = 'students';
    // primary key
    protected $primaryKey = 'student_id';
    // no time stamps
    public $timestamps = false;



} 