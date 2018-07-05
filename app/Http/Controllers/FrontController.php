<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactMail;
use App\Mail\ContactMail;
use App\ImgCarousel;
use App\Testimonial;
use App\Category;
use App\Service;
use App\Article;
use App\Comment;
use App\Projet;
use App\Tag;
use App\User;
use Storage;
use Mail;
use View;

class FrontController extends Controller
{
    public function __construct(){
        $categories = Category::all();
        $tags = Tag::all();
        $testimonialRand = Testimonial::orderByRaw('RAND()')->take(1)->get();

        View::share('categories', $categories);
        View::share('tags', $tags);
        View::share('testimonialRand', $testimonialRand);

    }
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
        $articles = Article::orderBy('created_at','DESC')->paginate(3);
        return view('indexArticle', compact('testimonialRand', 'categories', 'tags', 'articles'));
    }

    public function showBlog(Article $article)
    {
        return view('showArticle', compact('article'));
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function home()
    {
        return view('home');
    }
    
    public function comment(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->subject = $request->subject;
        $comment->message = $request->message;
        $comment->articles_id = $request->articles_id;
        $comment->save();
        return redirect()->back();
    }

    public function contactMail(StoreContactMail $request)
    {
        Mail::to('jnflion@gmail.com')->send(new ContactMail($request));
        return redirect()->back();
    }
}
