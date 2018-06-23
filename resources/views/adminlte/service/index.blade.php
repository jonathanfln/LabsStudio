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
    <tr>
      <th >#</th>
      <th >Nom</th>
      <th >Description</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($services as $service)
      <tr>
        <td scope="row">{{$loop->iteration}}</td>
        <td>{{$service->name}}</td>
        <td>{{$service->content}}</td>
        <td>
          <a href="{{route('services.show',['service'=>$service->id])}}" class="btn btn-warning">Voir</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop