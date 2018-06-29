@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
    <h1>Création d'un article</h1>
@stop

@section('content')
<div class="box w-75">
    <form action="" method="post">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="title"><h2>Titre</h2></label>
                @if($errors->has('title'))
                    <div class="text-danger">{{$errors->first('title')}}</div>
                @endif
                <input type="text" name="title" id="title" class="form-control" placeholder="Veuillez entrer le titre de l'article" value="{{old('title')}}">
            </div>
        </div>
        <div class="box-body">

        </div>
    </form>
</div>
@stop