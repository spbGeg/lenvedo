@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')

    <div class="col-8">
    <h1 class="h1">Главная страница</h1>
    <div class="content">
        <div class="col-12 jumbotron">
            <p>Вы находитесь в приложении, позволяющем получить Заголовок, описание и ключевые слова по любому доступному адресу</p>
            <p>Перейти на страницу с закладками</p><a href="{{ route('url-data') }}"><button class="btn btn-success">Перейти</button></a>
        </div>
		

    </div>
    </div>
@endsection





