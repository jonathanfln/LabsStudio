<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImgCarousel;
use App\Service;
use App\Article;
use App\Projet;
use App\Tag;
use App\User;
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
        $team = User::all();
        return view('welcome',compact('carouselImgs','servicesRand','services','testimonials','team'));
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
        $tags = Tag::all();
        $articles = Article::orderBy('created_at','DESC')->paginate(3);
        return view('blog', compact('testimonialRand','tags', 'articles'));
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
