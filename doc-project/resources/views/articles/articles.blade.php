@extends('layouts.master')

@section('head')
  Список инструкций
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Список инструкций</h1>
        
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
        
        @foreach ($data as $el)
        <div class="card mb-3" style="color: black;">
          <div class="card-header">
            <div class="row">
              <div class="col-6">Автор: {{ $el->nameAutor }}</div>
              <div class="col">Дата публикации: {{ $el->publishedDate }}</div>
              <div class="col">Статус:
                @if($el->statusArticle == 0)
                <u>Не опубликовано</u>
                @endif
                @if($el->statusArticle == 1)
                <u>Oпубликовано</u>
                @endif
                @if($el->statusArticle == 2)
                <u>На проверке</u>
                @endif
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $el->nameArticle }}</h5>
            <p class="card-text">{!! $el->annotation !!}</p>
            <a href="{{ route('articleView', $idArticle = $el->id) }}" class="btn btn-secondary">Смотреть статью</a>

            @if($el->id_user == Auth::id())

              <a href="{{ route('articleEdit', $idArticle = $el->id) }}" class="btn btn-secondary">Редактировать статью</a>

              @if($el->statusArticle !== 1)
              <a href="{{ route('articlePublished', $idArticle = $el->id) }}" class="btn btn-secondary">Опубликовать статью</a>
              @endif

              @if($el->statusArticle == 1)
              <a href="{{ route('articleUnPublished', $idArticle = $el->id) }}" class="btn btn-secondary">Снять с публикации статью</a>
              @endif
              <a href="{{ route('articleDelete', $idArticle = $el->id) }}" class="btn btn-danger">Удалить статью</a>

            @endif

          </div>
        </div>
      @endforeach

    </div>
</div>
@endsection