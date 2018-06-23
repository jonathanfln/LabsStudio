@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Éditer </h1>
@stop

@section('content')
<div class="box w-75">
		<form action="{{route('categories.update', ['categorie'=>$categorie->id])}}" method="post">
            @csrf
            @method('PUT')
			<div class="box-body">
				<label for="name">
                    <h3>Nom de la catégorie</h3>
				</label>
				<div class="form-group">
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