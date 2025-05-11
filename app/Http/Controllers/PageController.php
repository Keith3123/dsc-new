<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function contacts()
    {
        return view('pages.ContactUs');
    }

    public function aboutus()
    {
        return view('pages.AboutUs');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function Register()
    {
        return view('pages.register');
    }
}
