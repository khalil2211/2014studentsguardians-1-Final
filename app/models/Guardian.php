<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       5/04/14
 * Time Created :       4:38 PM
 * Version      :       1.0.0
 *
 * Description  :
 *
 *=================================================
 */

class Guardian extends Eloquent{

    // table name
    protected $table = 'guardians';
    // primary key
    protected $primaryKey = 'guardian_id';
    // no time stamps
    public $timestamps = false;

    /*
     * Create method to use students (many-many) relationship
     */
    public function studentslist(){
        /*
         * belongsToMany has 4 parameeters
         * 1. class name of many table (Student)
         * 2. name of pivot table students_has_guardians
         * 3. IMPORTANT primary key in pivot table OPPOSITE to many table (i.e. guardian_id)
         * 4. IMPORTANT primary key in pivot table EQUAL to many table (i.e. student_id)
         */
        return $this->belongsToMany('Student','students_has_guardians','guardian_id' ,'student_id');
    }
} 