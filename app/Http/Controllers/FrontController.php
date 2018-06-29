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
        $servicesRand = Service::orderByRaw('RAND()')->take(3)->get();
        $services = Service::orderBy('created_at','DESC')->paginate(9);
        return view('welcome',compact('carouselImgs','servicesRand','services'));
    }
    
    public function services()
    {
        $projets = Projet::orderBy('created_at','DESC')->paginate(3);
        $services = Service::orderBy('created_at','DESC')->paginate(9);
        return view('services', compact('projets','services'));
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
