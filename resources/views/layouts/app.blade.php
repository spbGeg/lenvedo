<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('title-block')</title>
</head>
@include('inc.header')
<div class="container main">
    @include('inc.messages')

    <div class="row content">
        {{--@include('simple_html_dom')--}}


       @yield('content')

        @if(!Request::is('/'))
        @include('inc.aside')

        @endif


    </div>

@include('inc.footer')
