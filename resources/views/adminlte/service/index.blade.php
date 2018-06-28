@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
  <h1>Vue d'ensemble des services</h1>
@stop

@section('content')
<div class="clearfix mb-3">
  <a href="{{route('services.create')}}" class="btn btn-success float-right">Ajouter un nouveau service</a>
</div>
<hr>
<table class="table table-light w-75">
  <thead>
    <tr class="row mx-0">
      <th class="col-md-1">#</th>
      <th class="col-md-3">Nom</th>
      <th class="col-md-7">Description</th>
      <th class="col-md-1">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($services as $service)
      <tr class="row mx-0 ">
        <td scope="row" class="col-md-1">{{$loop->iteration}}</td>
        <td class="col-md-3">{{$service->name}}</td>
        <td class="col-md-7">{{$service->content}}</td>
        <td class="col-md-1">
          <a href="{{route('services.show',['service'=>$service->id])}}" class="btn btn-warning">Voir</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop