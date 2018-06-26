@extends('adminlte::page')

@section('title', 'Tags')

@section('content_header')
  <h1>Vue d'ensemble des tags</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('tags.create')}}" class="btn btn-success float-right">Ajouter un nouveau tag</a>
</div>
<hr>
<table class="table table-light w-75">
  <thead>
    <tr>
      <th >#</th>
      <th >Nom</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tags as $tag)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td>{{$tag->name}}</td>
        <td>
          <a href="{{route('tags.edit',['tag'=>$tag->id])}}" class="btn btn-warning">Éditer</a>
          <form action="{{route('tags.destroy', ['tag'=>$tag->id])}}" class="d-inline-block" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop