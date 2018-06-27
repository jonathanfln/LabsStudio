@extends('adminlte::page')

@section('title', 'Catégories')

@section('content_header')
    <h1>Éditer la catégorie {{$categorie->name}}</h1>
@stop

@section('content')
<div class="box w-75">
		<form action="{{route('categories.update', ['categorie'=>$categorie->id])}}" method="post">
            @csrf
            @method('PUT')
			<div class="box-body">
				<div class="form-group">
					<label for="name"><h3>Nom</h3></label>
					@if($errors->has('name'))
            			<div class="text-danger">{{$errors->first('name')}}</>
          			@endif
					<input type="text" name="name" id="name" class="form-control w-50 {{$errors->has('name')?'border-danger':''}}" placeholder="Veuillez entrer un nom de catégorie" value="{{old('name', $categorie->name)}}">
				</div>
			</div>
			<div class="box-body">
				<button type="submit" class="btn btn-info">Enregistrer</button>
				<a href="{{route('categories.index')}}" class="btn btn-danger">Retour</a>
			</div>
		</form>
    </div>
@stop