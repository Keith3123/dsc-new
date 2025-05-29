<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function services()
    {
        return view('pages.GraphicServices');
    }

    public function send(Request $request)
    {
        // Optional validation
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        // Logic to handle data (store, email, etc. — for now just show success)
        return back()->with('success', 'Your message has been sent to our design team!');
    }
}
