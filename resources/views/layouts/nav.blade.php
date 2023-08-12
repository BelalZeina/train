{{-- extends and inhertans in laravel --}}
{{--  this is template layout show in all pages  --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- Scripts -->
    <script src="{{ asset('bootstrap.bundle.min.js')}}" ></script>
    <!-- Styles -->
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">
</head>
        <title>@yield("title")</title>
    </head>
<body>

{{-- end of section in the parent  --}}
<nav class="navbar navbar-expand-xxl navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">news</a>
            </li>
            {{--number optional parametar --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route("test1",56)}}">test1</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{route("zeina")}}">zeina</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('profile', ['id' => 1, 'photos' => 'yes'])}}">profile</a>
            </li> --}}
        </ul>
        </div>
    </div>
    </nav>
        <div class="container">
            @yield('content')
        </div>
