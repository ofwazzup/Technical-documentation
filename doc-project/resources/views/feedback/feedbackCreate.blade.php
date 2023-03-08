@extends('layouts.master')

@section('head')
    Что вы думаете о нас?
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Обратная связь</h1>
        <p>Пожалуйста, расскажите свое мнение о нашей работе.</p>

        
        


  <!-- <div class="jumbotron"> -->
    <div class="container" style="padding: 0px;">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif      
    <form method="post" action="{{route('feedbackCreateSubmit')}}">
      @csrf
      <div class="form-group">
        <label for="textName">Ваше имя</label>
        <input type="text" class="form-control" id="textName" name="textname" placeholder="Введите имя" value="{{ old('textname') }}">
      </div>

      <div class="form-group">
        <label for="feedbackText">Example textarea</label>
        <textarea class="form-control" id="feedbackText" name="feedbackText" rows="3">{{ old('feedbackText') }}</textarea>
      </div>
      <input type="submit" value="Отправить" class="btn btn-secondary">
    </form>

    </div>
  </div>
        

    </div>
<!-- </div> -->
@endsection