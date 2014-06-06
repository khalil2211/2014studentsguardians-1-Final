<?php

class HomeController extends BaseController {
/*
 *  This is the FIRST page the user sees.  Render the
 *  homepage.blade.php file in the home folder
 */
    public function showHomepage()
    {
        return View::make('home.homepage');
    }

}