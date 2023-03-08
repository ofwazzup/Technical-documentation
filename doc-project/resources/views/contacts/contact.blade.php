@extends('layouts.master')

@section('head')
Контакты
@endsection

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Контакты</h1>
        <p style="color: rgb(150, 150, 150);">Hello! My name is Ruslan and i'm Web Developer.</p>
        <p>Currently I am studying in the direction of "WEB-developer"
            and in the future I want to develop in this area. I spend all my free time programming.</p>
        <p>For the last year and a half, I have been actively using and studying the JavaScript
            language. I am currently doing front-end and back-end development. I have solid knowledge of CSS3
            (animations, flex, grid), HTML5.</p>
        <p>- Frameworks: Bootstrap, Materialize</p>
        <p>- Libraries: React, Angular, Laravel</p>
        <p>- Preprocessors: Less, SCSS</p>
        <p>- Operating systems: Windows</p>
        <p>In the future, there is a great desire to learn the Python language.</p>
        <p>I studied 11 school classes, went to preparatory courses in programming. After that, he was engaged in
            preparing for
            the exam and entering the university. Now I am engaged in filling out a portfolio on Git, training in Web
            development and self-development.</p>
        <p>My GIT: <a style="color: white;" href="https://github.com/ofwazzup"
                target="_blank">https://github.com/ofwazzup</a></p>
    </div>
    <div class="container mt-5">
        <p>У Вас возникли вопросы, жалобы, предложения? Самый быстрый и легкий способ связаться с нами, это заполнить
            форму ниже. Мы рассмотрим Ваше сообщение и ответим Вам в короткий срок.</p>

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
                <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
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