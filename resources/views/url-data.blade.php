@extends('layouts.app')

@section('title-block')Список закладок@endsection

@section('content')

    <div class="col-8">
    <h1 class="h1">Список закладок</h1>
    <div class="content">

        @foreach($data as $el)

            <div class="alert alert-info">
                <p><b>Дата добавления: </b>{{ $el->created_at  }}</p>
                <p><b>Фавикон: </b>{{ $el->favicon  }}</p>
                <p><b>Url страницы: </b>{{ $el->url  }}</p>
                <p><b>Заголовок страницы: </b>{{ $el->header  }}</p>
                <a href="{{ route('url-data-one', $el->id) }}"><button class="btn btn-primary">Детальнее</button></a>

            </div>

        @endforeach
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








