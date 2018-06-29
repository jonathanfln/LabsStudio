@extends('adminlte::page')

@section('title', 'Testimonials')

@section('content_header')
@stop

@section('content')
<a href="{{route('testimonials.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box w-75">
      <div class="box-body">
        <p>{{$testimonial->content}}</p>
      </div>
      <div class="box-body">
        <img src="{{Storage::disk('imgClient')->url($testimonial->client->image)}}" alt="{{$testimonial->client->name}}" class="rounded-circle" width="">
        <h3 class="d-inline-block ml-3">{{$testimonial->client->name}}</h3>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('testimonials.edit', ['testimonial'=>$testimonial->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('testimonials.destroy', ['testimonial'=>$testimonial->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop