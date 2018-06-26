<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function home()
    {
        return view('home');
    }



    // public function ()
    // {
    //     return view('blog');
    // }


}
