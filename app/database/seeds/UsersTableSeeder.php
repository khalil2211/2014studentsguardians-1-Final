<?php
/**
 * Created by   :       PhpStorm V7.
 * User         :       Stephan Jusypiw
 * Date         :       04/04/14
 * Time Created :       11:58 AM
 * Version      :       1.0.0
 *
 * Description  :       Seeder for users table
 *
 *=================================================
 */

/* aadded only 5 user by khalil */


class UsersTableSeeder extends Seeder{

    public function run(){



        // create user object
        $user= new User;
        // populate object
        $user->u_id = 1;
        $user->u_name = 'kieran';
        $user->u_password = Hash::make('kieran');
        // save to table
        $user->save();


        // create user object
        $user2= new User;
        // populate object
        $user2->u_id = 2;
        $user2->u_name = 'seungsup';
        $user2->u_password = Hash::make('seungsup');
        // save to table
        $user2->save();

        // create user object
        $user3= new User;
        // populate object
        $user3->u_id = 3;
        $user3->u_name = 'sivan';
        $user3->u_password = Hash::make('ivan');

        // save to table
        $user3->save();



        // create user object
        $user4 = new User;
        // populate object
        $user4->u_id = 4;
        $user4->u_name = 'kim';
        $user4->u_password = Hash::make('kim');
        // save to table
        $user4->save();


        $user5= new User;
        // populate object
        $user5->u_id =5;
        $user5->u_name = 'khalil';
        $user5->u_password = Hash::make('khalil');

        // save to table
        $user5->save();

    }
}

