@extends('layouts.master')

@section('head')
    Правообладателям
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Информация для правообладателей</h1>
        <p>Если Вы считаете, что какой-то из документов, на нашем сайте, содержит незаконную информацию, размещен с нарушением закона или нарушает Ваши авторские права.</p>
        <p>Пожалуйста, сообщите нам об этом, введя информацию в находящуюся ниже форму.</p>
        <p>Рассмотрение всех сообщений происходит в течение рабочей недели.</p>
    </div>
    <div class="container mt-5">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('contact-form')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="Email" placeholder="Введите email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="subject">Тема сообщения</label>
                <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
            </div>

            <div class="form-group">
                <label for="message">Введите сообщение</label>
                <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
            </div>

            <button type="submit" class="btn btn-secondary">Отправить</button>
        </form>
    </div>
</div>
@endsection