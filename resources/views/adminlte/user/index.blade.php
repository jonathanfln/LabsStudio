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
      <a href="{{route('users.show', ['user'=>$user->id])}}" class="text-dark">
      <div class="card-body text-center">
        <img src="{{Storage::disk('imgUser')->url ($user->image)}}" alt="{{$user->name}}" class="img-fluid" width="25%">
        <div class="d-inline-block ml-4">
          <h4>{{$user->name}}</h4>
          <h6>{{$user->job}}</h6>
        </div>
      </div>
      </a>
    </div>
  </div>
  @endforeach
</div>
@stop