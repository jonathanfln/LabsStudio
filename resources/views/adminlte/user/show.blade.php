@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
@stop

@section('content')
<a href="{{route('users.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box">
      <div class="box-header">
        @if($user->image != NULL)
        <img src="{{Storage::disk('imgUser')->url($user->image)}}" alt="{{$user->name}}" class="mr-3 ">
        @endif
        <h2 class="d-inline-block">{{$user->name}}</h2>
        <h2 class="d-inline-block mx-2">|</h2>
        <h4 class="d-inline-block"><span class="badge badge-dark">{{$user->role->name}}</span></h4>
      </div>
      <div class="box-body row">
        <div class="col-md-6">
          <h4>Adresse de contact :</h4>
          <p>{{$user->email}}</p>
        </div>
        @if($user->job != NULL)
        <div class="col-md-6">
          <h4>Poste :</h4>
          <p>{{$user->job}}</p>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('users.edit', ['user'=>$user->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('users.destroy', ['user'=>$user->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop