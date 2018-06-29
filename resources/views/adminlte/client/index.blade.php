@extends('adminlte::page')

@section('title', 'Clients')

@section('content_header')
    <h1>Vue d'ensemble des clients.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('clients.create')}}" class="btn btn-success float-right">Ajouter un nouveau client</a>
</div>
<hr>
<div class="row">
  @foreach($clients as $client)
  <div class="col-md-3 mb-5 ">
    <div class="card mx-auto" style="width: 18rem;">
      <div class="card-body text-center">
        <img class="mb-3" src="{{Storage::disk('imgClient')->url($client->image)}}" alt="{{$client->name}}">
        <h4>{{$client->name}}</h4>
        <h6>{{$client->company}}</h6>
        <hr>
        <a href="{{route('clients.show', ['client'=>$client->id])}}" class="btn btn-info text-white">Voir</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop