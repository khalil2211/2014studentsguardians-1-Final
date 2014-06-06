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

class UsersTableSeeder extends Seeder{

    public function run(){

        // create user object
        $user = new User;
        // populate object
        $user->id = 1;
        $user->username = 'john';
        $user->password = Hash::make('john');
        // save to table
        $user->save();

        // create user object
        $user2= new User;
        // populate object
        $user2->id = 2;
        $user2->username = 'cynthia';
        $user2->password = Hash::make('cynthia');
        // save to table
        $user2->save();


        // create user object
        $user3= new User;
        // populate object
        $user3->id = 3;
        $user3->username = 'paul';
        $user3->password = Hash::make('paul');
        // save to table
        $user3->save();

        // create user object
        $user4= new User;
        // populate object
        $user4->id = 4;
        $user4->username = 'linda';
        $user4->password = Hash::make('linda');
        // save to table
        $user4->save();
    }
}