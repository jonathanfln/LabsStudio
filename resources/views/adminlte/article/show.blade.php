@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
@stop

@section('content')
<a href="{{route('articles.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box">
      @if($article->image != NULL)
      <div class="box-header text-center">
        <img src="{{Storage::disk('imgArticle')->url($article->image)}}" alt="{{$article->title}}">
      </div>
      @endif
      <div class="box-body text-center">
        <h1 class="d-inline-block">{{$article->title}}</h1>
        @if($article->users_id != NULL)
        <h3 class="d-inline-block mx-2">|</h3>
        <h3 class="d-inline-block">{{$article->user->name}}</h3>
        @endif
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6 text-center">
            <h3>{{$article->category->name}}</h3>
          </div>
          <div class="col-md-6 text-center">
            @foreach($article->tags as $tag)
            <h4 class="d-inline-block"><span class="badge badge-dark">{{$tag->name}}</h4>
            @endforeach
          </div>
        </div>
      </div>
      
      <div class="box-body">
        <p>{{$article->content}}</p>
      </div>
      <div class="box-body"></div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('articles.edit', ['article'=>$article->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('articles.destroy', ['article'=>$article->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop