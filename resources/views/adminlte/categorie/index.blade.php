@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
  <h1>Vue d'ensemble des catégories</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('categories.create')}}" class="btn btn-success float-right">Ajouter une nouvelle catégorie</a>
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
    @foreach($categories as $category)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td>{{$category->name}}</td>
        <td>
          <a href="{{route('categories.edit',['categorie'=>$category->id])}}" class="btn btn-warning">Éditer</a>
          <form action="{{route('categories.destroy', ['categorie'=>$category->id])}}" class="d-inline-block" method="post">
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