@extends('adminlte::page')

@section('title', 'Articles')

@section('content_header')
    <h1>Vue d'ensemble des articles</h1>
@stop

@section('content')
    <div class="clearfix mb-3">
    <a href="{{route('articles.create')}}" class="btn btn-success float-right">Ajouter un nouvel article</a>
    </div>
    <hr>
@stop