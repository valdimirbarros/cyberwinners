<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cyber Winners</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('/favicon.ico') }}"/>
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">Cyber<b>Winners</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>   
                <li class="nav-item"><a  class="nav-link" href="{{ url('/jogador') }}">Jogadores</a></li>   
                <li class="nav-item"><a  class="nav-link" href="{{ url("jogo")  }}">Jogos</a></li>                         
            <ul>
        </div>
    </nav>

    @yield('content')
    
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

