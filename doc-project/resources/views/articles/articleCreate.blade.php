@section('head')
    Cоздать инструкцию
@endsection

@extends('layouts.master')


@section('content')


    <div class="container mt-5 mb-5">
    <h1 class="display-3">Создайте инструкцию</h1>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif      
    <form method="post" action="{{ route('articleCreateSubmit') }}">
      @csrf
      <div class="form-group">
        <label for="nameAutors">Ваше имя</label>
        <input type="text" class="form-control" id="nameAutors" name="nameAutors" placeholder="Введите имя" value="{{ old('nameAutors') }}">
      </div>

      <div class="form-group">
        <label for="nameArticle">Название инструкции</label>
        <input type="text" class="form-control" id="nameArticle" name="nameArticle" placeholder="Название инструкции" value="{{ old('nameArticle') }}">
      </div>

      <div class="form-group">
        <label for="articleAnnotation">Аннотация</label>
        <textarea class="form-control" id="articleAnnotation" name="articleAnnotation" rows="3">{{ old('articleAnnotation') }}</textarea>
      </div>

      <div class="form-group">
        <label for="articleContent">Содержимое инструкции</label>
        <textarea class="form-control" id="articleContent" name="articleContent" rows="6">{{ old('articleContent') }}</textarea>
      </div>
      <input type="submit" value="Сохранить статью" class="btn btn-success" name="articleSave">
      <input type="submit" value="Отправить на проверку статью" class="btn btn-warning" name="articleModerations">
    </form>

   
  </div>
  <script>
      $('#articleAnnotation').summernote({
        placeholder: 'Краткое описание',
        tabsize: 2,
        height: 100
      });
      $('#articleContent').summernote({
        placeholder: 'Инструкция',
        tabsize: 2,
        height: 200
      });
    </script>
  @endsection

@push('summeNoteStyle')
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush