@extends('layouts.master')


@section('content')

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
     
      <h1 class="display-3">{!! $data->nameArticle !!}</h1>
    
      <div>
        {!! $data->annotation !!}
      </div>
      {!! $data->content !!}
    </div>
  </div>
  @endsection
 
 @section('head')
Страница просмотра статьи
 @endsection