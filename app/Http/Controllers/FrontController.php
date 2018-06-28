<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImgCarousel;
use App\Service;
use App\Projet;
use Storage;

class FrontController extends Controller
{
    public function welcome()
    {
        $carouselImgs = ImgCarousel::all();
        $services = Service::orderByRaw('RAND()')->take(3)->get();
        return view('welcome',compact('carouselImgs','services'));
    }
    
    public function services()
    {
        $projets = Projet::all()->sortByDesc('created_at');
        return view('services', compact('projets'));
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
