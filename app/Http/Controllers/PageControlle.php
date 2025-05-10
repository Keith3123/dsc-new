<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControlle extends Controller
{
    public function home()
    {
        return view ('pages.Home');
    }
    public function contacts()
    {
        return view ('pages.ContactUs');
    }
    public function aboutus()
    {
        return view ('pages.AboutUs');
    }
}

