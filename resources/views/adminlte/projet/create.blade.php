@extends('adminlte::page')

@section('title', "Projets")

@section('content_header')
    <h1>Ajout d'un nouveau projet</h1>
@stop

@section('content')
<form action="{{route('projets.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box w-75">
    <div class="box-body">
      <label for="name"><h2>Nom</h2></label>
      @if($errors->has('name'))
        <div class="text-danger">{{$errors->first('name')}}</div>
      @endif
      <input type="text" name="name" id="name" class="form-control w-75 {{$errors->has('name')?'border-danger':''}}" placeholder="Nom du client" value="{{old('name')}}">
    </div>
    <div class="box-body">
      <label for="content"><h2>Description</h2></label>
      @if($errors->has('content'))
        <div class="text-danger">{{$errors->first('content')}}</div>
      @endif
      <div>
        <textarea name="content" id="content" class="w-75 {{$errors->has('content')?'border-danger':''}}" placeholder="Description du projet">{{old('content')}}</textarea>
      </div>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="image"><h2>Image</h2></label>
          @if($errors->has('image'))
            <div class="text-danger">{{$errors->first('image')}}</div>
          @endif
        <input type="file" class="form-control-file" name="image" id="image" placeholder="">
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('projets.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop