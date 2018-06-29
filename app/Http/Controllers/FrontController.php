<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImgCarousel;
use App\Service;
use App\Projet;
use App\Testimonial;
use Storage;

class FrontController extends Controller
{
    public function welcome()
    {
        $carouselImgs = ImgCarousel::all();
        $servicesRand = Service::orderByRaw('RAND()')->take(3)->get();
        $services = Service::orderBy('created_at','DESC')->paginate(9);
        $testimonials = Testimonial::with('client')->get()->sortByDesc('created_at')->take(6);
        return view('welcome',compact('carouselImgs','servicesRand','services','testimonials'));
    }
    
    public function services()
    {
        $projets = Projet::orderBy('created_at','DESC')->paginate(3);
        $services = Service::orderBy('created_at','DESC')->paginate(9);
        $services1Rand = Service::orderByRaw('RAND()')->take(3)->get();
        $services2Rand = Service::orderByRaw('RAND()')->take(3)->get();
        return view('services', compact('projets','services','services1Rand','services2Rand'));
    }
    
    public function blog()
    {
        $testimonialRand = Testimonial::orderByRaw('RAND()')->take(1)->get();
        return view('blog', compact('testimonialRand'));
    }
    
    public function contact()
    {
        return view('contact');
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
