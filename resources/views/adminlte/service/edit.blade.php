@extends('adminlte::page')

@section('title', "Service")

@section('content_header')
	<h1>Création d'un nouveau service</h1>
@stop

@section('content')
	<div class="box w-75">
		<form action="{{route('services.update', ['service'=>$service->id])}}" method="post">
      @csrf
      @method('PUT')
			<div class="box-body">
        <div class="form-group">
          <label for="icon"><h3>Icon</h3></label>
          @if($errors->has('image'))
            <div class="text-danger">{{$errors->first('image')}}</>
          @endif
          <input type="text" class="form-control w-50 {{$errors->has('image')?'border-danger':''}}" name="image" id="icon" placeholder="Veuillez ajouter une icon pour le service avec flaticon" value="{{old('image', $service->image)}}">
        </div>
				<div class="form-group">
          <label for="name"><h3>Nom</h3></label>
          @if($errors->has('name'))
            <div class="text-danger">{{$errors->first('name')}}</>
          @endif
					<input type="text" name="name" id="name" class="form-control w-50 {{$errors->has('name')?'border-danger':''}}" placeholder="Veuillez entrer un nom pour le service" value="{{old('name', $service->name)}}">
        </div>
        <div class="form-group">
          <label for="content"><h3>Description</h3></label>
          @if($errors->has('content'))
            <div class="text-danger">{{$errors->first('content')}}</>
          @endif
          <textarea class="form-control {{$errors->has('content')?'border-danger':''}}" name="content" id="content" placeholder="Veuillez entre la description du service" >{{old('content', $service->content)}}</textarea>
        </div>
      </div>
			<div class="box-body">
				<button type="submit" class="btn btn-info">Enregistrer</button>
				<a href="{{route('services.show', ['service'=>$service->id])}}" class="btn btn-danger">Retour</a>
			</div>
		</form>
	</div>
@stop