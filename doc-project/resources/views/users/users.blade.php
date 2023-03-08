@extends('layouts.master')

@section('head')
Пользователи
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Список пользователей</h1>
        <p>На данной странице представлены все зарегистрированные пользователи:</p>
        
        @foreach($data as $el)
        <div class="card mb-2 card-users">
            <div class="card-header">
                {{$el->name}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$el->email}}</h5>
                <p class="card-text">Дата регистрации: {{$el->created_at}}</p>
                <p class="card-text">Дата обновления учетной записи: {{$el->updated_at}}</p>
                <a href="#" class="btn btn-secondary">Редактировать учетную запись</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection