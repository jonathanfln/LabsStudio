@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Vue d'ensemble des utilisateurs.</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('users.create')}}" class="btn btn-success float-right">Ajouter un nouvel utilisateur</a>
</div>
<hr>
<div class="row">
  @foreach($users as $user)
  <div class="col-md-3 mb-5 ">
    <div class="card mx-auto" style="width: 18rem;">
      {{-- <img class="card-img-top" src="{{Storage::disk('imgClient')->url($user->image)}}" alt="{{$user->name}}"> --}}
      <div class="card-body text-center">
        <h4>{{$user->name}}</h4>
        <h6>{{$user->company}}</h6>
        <hr>
        <a href="{{route('users.show', ['user'=>$user->id])}}" class="btn btn-info text-white">Voir</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop