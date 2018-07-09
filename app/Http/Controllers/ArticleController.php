<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtCreate;
use App\Http\Requests\StoreArtEdit;
use App\Services\ImageResize;
use Illuminate\Http\Request;
use App\Category;
use App\Article;
use App\User;
use App\Tag;
use Storage;
use Auth;

class ArticleController extends Controller
{

    public function __construct(ImageResize $imageResize)
    {
        $this->imageResize = $imageResize;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');
        return view('adminlte.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('adminlte.article.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtCreate $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        // dd(Auth::user()->id);
        $article->users_id = Auth::user()->id;
        $article->categories_id = $request->categories_id;
        $article->validation = 2;
        if($request->image != NULL)
        {
            // $article->image = $request->image->store('', 'imgArticle');
            $image = [
                "name" => $request->image,
                "disk" => 'imgArticle',
                "w" => 755,
                "h" => 270,
            ];
            $article->image = $this->imageResize->imageStore($image);
        }

        
        if($article->save())
        {
            foreach($request->tags_id as $tag)
            {
            $article->tags()->attach($tag);
            }

            return redirect()->route('articles.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('adminlte.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('adminlte.article.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArtEdit $request, Article $article)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        // dd(Auth::user()->id);
        $article->categories_id = $request->categories_id;
        if($request->image != NULL)
        {
            if(Storage::disk('imgArticle')->exists($article->image))
            {
                Storage::disk('imgArticle')->delete($article->image);
            }
            // $article->image = $request->image->store('', 'imgArticle');
            $image = [
                "name" => $request->image,
                "disk" => 'imgArticle',
                "w" => 755,
                "h" => 270,
            ];
            $article->image = $this->imageResize->imageStore($image);
        }

        $article->tags()->detach();
        
        if($article->save())
        {
            foreach($request->tags_id as $tag)
            {
            $article->tags()->attach($tag);
            }

            return redirect()->route('articles.show', ['article'=>$article->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();
        
        if($article->delete())
        {
            Storage::disk('imgArticle')->delete($article->image);
            return redirect()->route('articles.index');
        }
    }
}
