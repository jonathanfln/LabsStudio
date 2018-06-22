@extends('adminlte::page')

@section('title', 'Carousel')

@section('content_header')
    <h1>Vue d'ensemble des images du carousel.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('carousel.create')}}" class="btn btn-success float-right">Ajouter une nouvelle image</a>
</div>
<hr>
<div class="row">
  @foreach($carousels as $carousel)
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{Storage::disk('imgCarousel')->url($carousel->image)}}" alt="{{$carousel->name}}">
      <div class="card-body text-center">
        <h5>{{$carousel->name}}</h5>
        <hr>
        <form action="{{route('carousel.destroy', ['carousel'=>$carousel->id])}}" method="post" class="text-center">
          @csrf
          @method('DELETE')
          <a href="{{route('carousel.edit', ['carousel'=>$carousel->id])}}" class="btn btn-warning">Modifier</a>
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop