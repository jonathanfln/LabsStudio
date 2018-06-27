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
<table class="table table-light w-50">
  <thead>
    <tr class="row mx-0">
      <th class="col-md-1">#</th>
      <th class="col-md-8">Nom</th>
      <th class="col-md-3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
      <tr class="row mx-0">
        <td scope="row" class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-8">{{$category->name}}</td>
        <td class="col-md-3">
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