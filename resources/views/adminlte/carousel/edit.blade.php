@extends('adminlte::page')

@section('title', "Carousel")

@section('content_header')
    <h1>Éditer une image du carousel</h1>
@stop

@section('content')
<form action="{{route('carousel.update', ['carousel'=>$carousel->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="box w-75">
    <div class="box-header">
      <label for="name">
        <h2>
          Nom de l'image
        </h2>
      </label>
      @if($errors->has('name'))
        <div class="text-danger">{{$errors->first('name')}}</div>
      @endif
      <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'border-danger':''}}" placeholder="Nom du projet" value="{{old('name', $carousel->name)}}">
    </div>
    <div class="box-body">
      <div class="form-group">
          @if($errors->has('image'))
            <div class="text-danger">{{$errors->first('image')}}</div>
          @endif
        <label for="image" name=""></label>
        <input type="file" class="form-control-file" name="image" id="" placeholder="">
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('carousel.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop