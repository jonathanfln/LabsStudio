@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
    <h1>Vue d'ensemble des articles</h1>
@stop

@section('content')
    <div class="clearfix mb-3">
        <a href="{{route('articles.create')}}" class="btn btn-success float-right">Ajouter un nouvel article</a>
    </div>
    <hr>
    <div class="row ">
    @foreach($articles as $article)
    <div class="col-md-3 mb-4">
        <div class="card mx-auto" style="width: 18rem;">
            <a href="{{route('articles.show', ['article'=>$article->id])}}" class="">
                <img class="card-img-top" src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="{{$article->name}}">
                <div class="card-body text-dark">
                    <h3>{{$article->title}}</h3>
                    {{-- <p>{{$article->content}}</p> --}}
                    <p>{{$description = substr($article->content, 0, 300)}}</p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
@stop