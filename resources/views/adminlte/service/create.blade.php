@extends('adminlte::page')

@section('title', "Services")

@section('content_header')
	<h1>Création d'un nouveau service</h1>
@stop

@section('content')
<div class="row justify-content-around">
  <div class="col-md-7">
    <div class="box">
      <form action="{{route('services.store')}}" method="post">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="icon"><h3>Icon</h3></label>
            @if($errors->has('image'))
              <div class="text-danger">{{$errors->first('image')}}</>
            @endif
            <input type="text" class="form-control w-50 {{$errors->has('image')?'border-danger':''}}" name="image" id="icon" placeholder="Veuillez ajouter une icon pour le service avec flaticon*" value="{{old('image')}}">
          </div>
          <div class="form-group">
            <label for="name"><h3>Nom</h3></label>
            @if($errors->has('name'))
              <div class="text-danger">{{$errors->first('name')}}</>
            @endif
            <input type="text" name="name" id="name" class="form-control w-50 {{$errors->has('name')?'border-danger':''}}" placeholder="Veuillez entrer un nom pour le service*" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="content"><h3>Description</h3></label>
            @if($errors->has('content'))
              <div class="text-danger">{{$errors->first('content')}}</>
            @endif
            <textarea class="form-control {{$errors->has('content')?'border-danger':''}}" name="content" id="content" placeholder="Veuillez entre la description du service*" >{{old('content')}}</textarea>
          </div>
        </div>
        <div class="box-body">
          <button type="submit" class="btn btn-info">Enregistrer</button>
          <a href="{{route('services.index')}}" class="btn btn-danger">Retour</a>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box ">
      <div class="box-header">
        <h1 class="text-center">Icons</h1>
        <h6 class="text-center">Copier le code a coté de l'icône souhaitée</h6>
      </div>
        <div class="box-body">
        @foreach($icons as $icon)
          <div class="row align-items-center ml-5"><h1 class="d-inline-block mr-3"><i class="{{$icon->icon}}"></i></h1><h3 class="d-inline-block">{{$icon->icon}}</h3></div>
        @endforeach
        <div class="">
          {{$icons->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
@stop