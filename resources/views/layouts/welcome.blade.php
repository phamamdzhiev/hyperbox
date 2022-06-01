<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--    Fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <title>
        {{ env('APP_NAME', 'HyperBox') }}
    </title>
</head>
<body class="antialiased">
@include('components.header')
<div class="container-xxl">
    @yield('main')
    <h3 class="fw-bold text-white my-5">
        ВСИЧКИ КУТИИ
    </h3>
    @include('components.categories')
    <div class="homepage-wrapper">
        @include('components.box-singleton')
        @include('components.box-singleton')
        @include('components.box-singleton')
        @include('components.box-singleton')
        @include('components.box-singleton')
        @include('components.box-singleton')
        @include('components.box-singleton')
    </div>
</div>

<script defer src="{{ asset('js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
