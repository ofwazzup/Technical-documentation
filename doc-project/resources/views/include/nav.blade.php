<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand border rounded-pill border-secondary" style="padding: 0px 7px" href="{{route('home')}}">Tech documentation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Главная</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('copyrights')}}">Правообладателям</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Инструкции</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('articlesAll')}}">Список инструкций</a>
                        @auth
                        <a class="dropdown-item" href="{{route('articleCreate')}}">Написать инструкцию</a>
                        @endauth
                        <hr class="navhr">
                        <a class="dropdown-item" href="{{route('articlesForReview')}}">Инструкции на проверке</a>
                        <a class="dropdown-item" href="{{route('articlesInProgress')}}">Инструкции в работе</a>
                        <a class="dropdown-item" href="{{route('articlesPublished')}}">Опубликованные инструкции</a>
                    </div>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Разное</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('feedback')}}">Отзывы</a>
                        <a class="dropdown-item" href="{{route('contact')}}">Контакты</a>
                        @auth
                        <a class="dropdown-item" href="{{route('users')}}">Пользователи</a>
                        <a class="dropdown-item" href="{{ route('articleUser') }}">Мои статьи</a>
                        @endauth
                    </div>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 ml-3 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary  ">Аккаунт</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary  ml-3">Войти</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary ">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
</nav>