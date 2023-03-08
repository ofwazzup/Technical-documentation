@extends('layouts.master')

@section('head')
    Главная страница
@endsection

@section('content')
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Добро пожаловать на сайт</h1>
                <h2 class="display-4">Tech documentation</h2>
                <p>Tech documentation — Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae debitis, eligendi sapiente beatae minima accusantium
                     illo tenetur porro similique non! Itaque provident quo sed labore dolores quos hic aspernatur vitae molestias, nihil voluptatibus
                      consequatur deleniti fuga molestiae repudiandae. Quibusdam, nemo laboriosam officiis ipsam recusandae maxime quis odit expedita
                       aut nisi non pariatur nulla atque aperiam molestiae possimus itaque eligendi beatae dignissimos odio quisquam cum vel. Nobis
                        doloremque, quisquam aspernatur animi sed omnis voluptates? Odio error ipsum, minus illum facere, aperiam natus tempora suscipit
                         molestias excepturi a rerum voluptates mollitia nesciunt ipsam ab corporis in libero! Quidem illo tenetur eveniet unde, perspiciatis
                          autem odit nostrum harum pariatur dolorum minus! Similique temporibus placeat quisquam perferendis illum inventore obcaecati quae
                           nostrum! Possimus ex quasi excepturi accusamus ad, alias hic, porro accusantium atque aperiam officia temporibus reiciendis est
                            voluptatibus, neque sequi? Nostrum laboriosam eum, impedit, alias esse tempora suscipit accusamus obcaecati ad totam non.</p>
                <p><a class="btn btn-secondary btn-lg" href="{{route('contact')}}" role="button">Обо мне &raquo;</a></p>
            </div>
        </div>
@endsection