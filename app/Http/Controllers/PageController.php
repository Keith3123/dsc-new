<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function product()
    {
        return view('pages.Product');
    }

    public function proj()
    {
        return view('pages.Project');
    }

    public function aboutus()
    {
        return view('pages.AboutUs');
    }

     public function contacts()
    {
        return view('pages.Contact');
    }

     public function services()
    {
        return view('pages.Service');
    }

     public function loc()
    {
        return view('pages.Location');
    }
}
