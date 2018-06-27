@extends('adminlte::page')

@section('title', 'Testimonials')

@section('content_header')
    <h1>Vue d'ensemble des testimoniaux.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('testimonials.create')}}" class="btn btn-success float-right">Ajouter un nouveau testimonial</a>
</div>
<hr>
<div class="row">
  @foreach($testimonials as $testimonial)
  <a href="{{route('testimonials.show', ['testimonial'=>$testimonial->id])}}">
  <div class="col-md-3 mb-5 ">
    <div class="card mx-auto" style="width: 18rem;">
      <div class="card-body text-center">
        <p>{{$testimonial->content}}</p>
        <img src="{{Storage::disk('imgClient')->url($testimonial->client->image)}}" alt="{{$testimonial->client->name}}" class="img-fluid">
        <h4 class="mt-2">{{$testimonial->client->name}}</h4>
        <hr>
        <a href="{{route('testimonials.show', ['testimonial'=>$testimonial->id])}}" class="btn btn-info text-white">Voir</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop