@extends('adminlte::page')

@section('title', 'Commentaires')

@section('content_header')
@stop

@section('content')
<a href="{{route('comments.index')}}" class="btn btn-info">Retour</a>
<hr>
<div class="box w-50">
  <div class="box-header">
    <h3 class="d-inline-block mr-2">Auteur :</h3>
    <h4 class="d-inline-block">{{$comment->name}} [{{$comment->email}}]</h4>
  </div>
  <div class="box-body">
    <h3 class="d-inline-block mr-2">Sujet :</h3>
    <h4 class="d-inline-block">{{$comment->subject}}</h4>
  </div>
  <div class="box-body">
    <h3 class="">Message :</h3>
    <p>{{$comment->message}}</p>
  </div>
  <div class="box-body text-center">
    <form action="{{route('comments.update', ['comment'=>$comment->id])}}" class="d-inline-block" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" value="1" name="validation">
      <button class="btn btn-success" type="submit">Valider</button>
    </form>
    <form action="{{route('comments.update', ['comment'=>$comment->id])}}" class="d-inline-block" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" value="2" name="validation">
      <button class="btn btn-warning" type="submit">En suspend</button>
    </form>
    <form action="{{route('comments.update', ['comment'=>$comment->id])}}" class="d-inline-block"  method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" value="3" name="validation">
      <button class="btn btn-danger" type="submit">Refuser</button>
    </form>
  </div>
</div>

@stop