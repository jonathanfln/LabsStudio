@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
@stop

@section('content')
<a href="{{route('clients.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box w-75">
      <div class="box-header">
        <h2 class="d-inline-block">{{$client->name}} | </h2>
        <h4 class="d-inline-block">{{$client->company}}</h4>
      </div>
      <div class="box-body">
        <img class="rounded-circle" src="{{Storage::disk('imgClient')->url($client->image)}}" alt="{{$client->name}}">
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('clients.edit', ['client'=>$client->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('clients.destroy', ['client'=>$client->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop