@extends('layouts.master')


@section('content')


    <div class="container mt-5">
    <form method="post" action="{{ route('articleCreateSubmit') }}">
      @csrf
        <div class="form-group">
        <label for="summernote">Содержимое статьи</label>
        <textarea class="form-control" id="summernote" name="summernote" rows="6" style="color: black;"></textarea>
      </div>
      <input type="submit" value="Сохранить статью" class="btn btn-success" name="articleSave">
    </form>

    </div>
  
  <script>
      $('#summernote').summernote({
        placeholder: 'Ввод',
        tabsize: 2,
        height: 100
      });
    </script>
  @endsection
 
 @section('head')
Страница редактора SummerNote
 @endsection

@push('summeNoteStyle')
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endpush


