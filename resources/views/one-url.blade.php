@extends('layouts.app')

@section('title-block')Страница с URL от {{$data->created_at }} @endsection

@section('content')

    <div class="col-8">
    <h1 class="h1">Закладка от {{$data->created_at}}</h1>
    <div class="content">



            <div class="alert alert-info">
                <p><b>Дата добавления: </b>{{ $data->created_at  }}</p>
                <p><b>Фавикон: </b>{{ $data->favicon  }}</p>
                <p><b>Url страницы: </b>{{ $data->url  }}</p>
                <p><b>Заголовок страницы: </b>{{ $data->header  }}</p>
                <p><b>META Description: </b>{{ $data->description  }}</p>
                <p><b>META Keywords: </b>{{ $data->keywords  }}</p>
                <a href="{{ route('url-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>

            </div>


            {{--<nav aria-label="...">--}}
                {{--<ul class="pagination pagination-lg">--}}
                    {{--<li class="page-item disabled">--}}
                        {{--<a class="page-link" href="#" tabindex="-1">1</a>--}}
                    {{--</li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                    {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
    </div>
    </div>
@endsection

@section('aside')
@parent
@endsection



