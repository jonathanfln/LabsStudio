@extends('adminlte::page')

@section('title', "Clients")

@section('content_header')
    <h1>Édition d'un client</h1>
@stop

@section('content')
<form action="{{route('clients.update', ['client'=>$client->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="box w-75">
    <div class="box-body">
      <label for="name"><h2>Nom</h2></label>
      @if($errors->has('name'))
        <div class="text-danger">{{$errors->first('name')}}</div>
      @endif
      <input type="text" name="name" id="name" class="form-control w-75 {{$errors->has('name')?'border-danger':''}}" placeholder="Nom du client" value="{{old('name', $client->name)}}">
    </div>
    <div class="box-body">
      <label for="company"><h2>Société</h2></label>
      @if($errors->has('content'))
        <div class="text-danger">{{$errors->first('content')}}</div>
      @endif
      <input type="text" name="company" id="company" class="form-control w-75 {{$errors->has('content')?'border-danger':''}}" placeholder="Nom de la société" value="{{old('company', $client->company)}}">
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="image"><h2>Photo</h2></label>
          @if($errors->has('image'))
            <div class="text-danger">{{$errors->first('image')}}</div>
          @endif
        <input type="file" class="form-control-file" name="image" id="image" placeholder="">
      </div>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('clients.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop