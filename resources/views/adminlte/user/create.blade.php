@extends('adminlte::page')

@section('title', "Users")

@section('content_header')
    <h1>Ajout d'un nouvel utilisateur</h1>
@stop

@section('content')
<form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="box w-75">
    <div class="box-body row">

      {{-- Nom --}}
      <div class="col-md-6">
        <div class="form-group w-75">
          <label for="name"><h3>Nom</h3></label>
          @if($errors->has('name'))
            <div class="text-danger">{{$errors->first('name')}}</div>
          @endif
          <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'border-danger':''}}" placeholder="Nom de l'utilisateur" value="{{old('name')}}">
        </div>
      </div>
      {{-- Fin nom --}}

      {{-- Photo  --}}
      <div class="col-md-6">
        <div class="form-group">
          <label for="image"><h3>Photo</h3></label>
            @if($errors->has('image'))
              <div class="text-danger">{{$errors->first('image')}}</div>
            @endif
          <input type="file" class="form-control-file" name="image" id="image" placeholder="">
        </div>
      </div>
      {{-- Fin photo --}}

    </div>
    <div class="box-body row">

      {{-- Mail --}}
      <div class="col-md-6">
        <div class="form-group w-75">
          <label for="email"><h3>Adresse email</h3></label>
          <input type="email" class="form-control" name="email" id="email" placeholder="adresse@email.com" value="{{old('email')}}">
        </div>
      </div>
      {{-- Fin mail --}}


      {{-- Role --}}
      <div class="col-md-6">
        <div class="form-group w-75 ">
          <label for="role"><h3>Role</h3></label>
          <select class="form-control" name="roles_id" id="role">
            @foreach($roles as $role)
              <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      {{-- Fin role --}}

    </div>
    <div class="box-body row">

      {{-- Mot de passe --}}
      <div class="col-md-6 ">
        <div class="form-group">
          <label for=""><h3>Mot de passe</h3></label>
          <input type="password" class="form-control w-75" name="password" id="" placeholder="Veuillez entrer un mot de passe">
          <input type="password" class="form-control w-75" name="password_confirmation" id="" placeholder="Veuillez retaper votre mot de passe">
        </div>
      </div>
      {{-- Fin mot de passe --}}

      {{-- Poste --}}
      <div class="col-md-6">
        <div class="form-group w-75">
          <label for="post"><h3>Poste</h3></label>
          <input type="text" name="job" id="post" class="form-control" placeholder="Poste de la personne" value="{{old('job')}}">
        </div>
      </div>
      {{-- Fin poste --}}

    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('users.index')}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop