@extends('adminlte::page')

@section('title', "Testimonials")

@section('content_header')
    <h1>Édition d'un testimonial</h1>
@stop

@section('content')
<form action="{{route('testimonials.update', ['testimonial'=>$testimonial->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="box w-75">
    <div class="box-body">
      <label for="content"><h2>Testimonial</h2></label>
      @if($errors->has('content'))
        <div class="text-danger">{{$errors->first('content')}}</div>
      @endif
      <textarea name="content" id="content" placeholder="Avis du client" class="w-100 {{$errors->has('name')?'border-danger':''}}" >{{old('content', $testimonial->content)}}</textarea>
    </div>
    <div class="box-body">
      <label for="company"><h2>Client</h2></label>
      @if($errors->has('clients_id'))
        <div class="text-danger">{{$errors->first('clients_id')}}</div>
      @endif
      <select class="form-control" name="clients_id" id="client_id" class="w-25">
        @foreach($clients as $client)
          <option class="" {{old('clients_id', ($testimonial->clients_id == $client->id) ? 'selected' :'' )}} value="{{$client->id}}">{{$client->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="box-body">
      <button class="btn btn-info" type="submit">Enregister</button>
      <a href="{{route('testimonials.show', ['testimonial'=>$testimonial->id])}}" class="btn btn-danger">Retour</a>
    </div>
  </div>
</form>
@stop