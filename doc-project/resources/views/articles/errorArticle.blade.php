@extends('layouts.master')

@section('head')
  Ошибка
 @endsection

@section('content')

  <div class="jumbotron">
    <div class="container">
     
      <h1 class="display-3">Нет доступа для редактирования</h1>
      <p><a class="btn btn-secondary btn-lg" href="{{route('articlesAll')}}" role="button">Назад &raquo;</a></p>
    
    </div>
  </div>
  @endsection
