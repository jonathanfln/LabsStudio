@extends('adminlte::page')

@section('title', 'Projets')

@section('content_header')
@stop

@section('content')
<a href="{{route('projets.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="row">
  <div class="col-md-10">
    <div class="box w-75">
      <div class="box-header">
        <img class="img-fluid" src="{{Storage::disk('imgProjet')->url($projet->image)}}" alt="{{$projet->name}}">
      </div>
      <hr>
      <div class="box-body">
          <h2 class="d-inline-block">{{$projet->name}}</h2>
          <p>{{$projet->content}}</p>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="box">
      <div class="box-header">
        <h2 class="text-center">Actions</h2>
      </div>
      <div class="box-body text-center">
        <a href="{{route('projets.edit', ['projet'=>$projet->id])}}" class="btn btn-info text-white m-1 w-50">Éditer</a>
        <form action="{{route('projets.destroy', ['projet'=>$projet->id])}}" method="post" class="">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1 w-50">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</div>
@stop