@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
@stop

@section('content')
<a href="{{route('services.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box w-75">
      <div class="box-header">
        
        <h2><i class="{{$service->image}}"></i> {{$service->name}}</h2>
      </div>
      <div class="box-body">
        <p>{{$service->content}}</p>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('services.edit', ['service'=>$service->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('services.destroy', ['service'=>$service->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop