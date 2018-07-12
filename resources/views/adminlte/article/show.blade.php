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
      <div class="text-center">
        @if($article->validation == 2)
          <span class="badge badge-warning text-white">En suspend</span>
        @elseif($article->validation == 1)
          <span class="badge badge-success">Approuvé</span>
        @elseif($article->validation == 3)
          <span class="badge badge-danger">Refusé</span>
        @endif
      </div>
      <div class="box-body text-center">
        <h1 class="d-inline-block">{{$article->title}}</h1>
        @if($article->user != NULL)
        <h3 class="d-inline-block mx-2">|</h3>
        <h3 class="d-inline-block">{{$article->user->name}}</h3>
        @endif
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6 text-center">
            @if($article->category != NULL)
              <h3>{{$article->category->name}}</h3>
            @endif
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
        @can('isOwner', $article)
        <a href="{{route('articles.edit', ['article'=>$article->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('articles.destroy', ['article'=>$article->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
        @endcan
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-10">
    {{-- @can() --}}
    @can('admin')
    <div class="box">
      <div class="box-body text-center">
        <form action="{{route('validation.update', ['article'=>$article->id])}}" class="d-inline-block" method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" value="1" name="validation">
          <button class="btn btn-success" type="submit">Valider</button>
        </form>
        <form action="{{route('validation.update', ['article'=>$article->id])}}" class="d-inline-block" method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" value="2" name="validation">
          <button class="btn btn-warning mx-3" type="submit">En suspend</button>
        </form>
        <form action="{{route('validation.update', ['article'=>$article->id])}}" class="d-inline-block"  method="POST">
          @csrf
          @method('PUT')
          <input type="hidden" value="3" name="validation">
          <button class="btn btn-danger" type="submit">Refuser</button>
        </form>
      </div>
    </div>
    @endcan
    {{-- @endcan --}}
  </div>
</div>
@stop