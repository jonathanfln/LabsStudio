@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
Édition d'un article
@stop

@section('content')
<div class="box w-75">
    <form action="{{route('articles.update', ['article'=>$article->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="form-group">
                <label for="title"><h2>Titre</h2></label>
                @if($errors->has('title'))
                    <div class="text-danger">{{$errors->first('title')}}</div>
                @endif
                <input type="text" name="title" id="title" class="form-control {{$errors->has('title')?'border-danger':''}}" placeholder="Veuillez entrer le titre de l'article" value="{{old('title', $article->title)}}">
            </div>
            <div class="form-group">
                <label for="content"><h2>Article</h2></label>
                @if($errors->has('title'))
                    <div class="text-danger">{{$errors->first('content')}}</div>
                @endif
                <textarea class="form-control {{$errors->has('content')?'border-danger':''}}" name="content" id="content" rows="3" placeholder="Veuillez taper votre article">{{old('content', $article->content)}}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cat"><h2>Catégorie</h2></label>
                        <select class="form-control w-50" name="categories_id" id="cat">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{old('categories_id', ($article->categories_id == $category->id) ? 'selected' :'' )}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-check text-center">
                        <label for=""><h3>Tags</h3></label>
                        @if($errors->has('tags_id'))
                            <div class="text-danger">{{$errors->first('tags_id')}}</div>
                        @endif
                        <div class="row">
                        @foreach($tags as $tag)
                            <label class="form-check-label col-md-3">
                            <input type="checkbox" class="form-check-input" name="tags_id[]" id="" value="{{$tag->id}}"
                            @foreach(old('techno_id', $article->tags) as $tagchecked)
                            @if(old('techno_id'))
                                {{($tagchecked == $tag->id) ? 'checked' :''}}
                            @else
                                {{($tagchecked->id == $tag->id) ? 'checked' :''}}
                            @endif
                            @endforeach>
                            {{$tag->name}}
                            </label>
                        @endforeach
                        </div>
                    </div>       
                </div>
            </div>
            <div class="form-group">
                <label for="image"><h2>Image</h2></label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
        </div>
            <div class="box-body">
            <button class="btn btn-info mr-2" type="submit">Enregistrer</button>
            <a href="{{route('articles.show', ['article'=>$article->id])}}" class="btn btn-danger">Retour</a>
        </div>
    </form>
</div>
@stop