@extends('adminlte::page')

@section('title', 'Commentaires')

@section('content_header')
  <h1>Vue d'ensemble des commentaires</h1>
@stop

@section('content')
<div>
  <h5>Commentaires en attente de validation</h5>
  <table class="table table-light ">
    <thead>
      <tr class="row mx-0">
        <th class="col-md-1">#</th>
        <th class="col-md-8">Titre de l'article</th>
        <th class="col-md-3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comments as $comment)
        <tr class="row mx-0">
          <td scope="row" class="col-md-1">
            {{$loop->iteration}}
            @if($comment->validation == 2)
            <span class="badge badge-warning text-white ml-4">En suspend</span>
            @elseif($comment->validation == 1)
            <span class="badge badge-success ml-4">Approuvé</span>
            @elseif($comment->validation == 3)
            <span class="badge badge-danger ml-4">Refusé</span>
            @endif
          </td>
          <td class="col-md-8">{{$comment->article->title}}</td>
          <td class="col-md-3">
            <a href="{{route('comments.show',['comment'=>$comment->id])}}" class="btn btn-info">Voir</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop