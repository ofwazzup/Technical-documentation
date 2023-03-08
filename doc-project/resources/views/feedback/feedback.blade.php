@extends('layouts.master')

@section('head')
Обратная связь
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Обратная связь</h1>
        <p>Расскажите, что вы думаете о нас. Ваш отзыв будет выложен на страницу.</p>
        <a class="btn btn-secondary btn-lg" href="{{route('feedbackCreate')}}" role="button">Что вы думаете о нас? &raquo;</a>

        @foreach ($data as $el)
        <div class="card mt-5 mb-2 card-users">
            <div class="card-header">
                {{$el->name}}
                <p class="card-text">Создано: {{$el->created_at}}</p>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$el->feedback}}</h5>
                <p class="card-text" style="font-size:12px;">Обновлено: {{$el->updated_at}}</p>
                <a href="#" class="btn btn-secondary">Редактировать учетную запись</a>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection