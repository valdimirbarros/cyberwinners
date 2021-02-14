<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cyber Winners</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">Cyber<b>Winners</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>   
                <li class="nav-item"><a  class="nav-link" href="{{ url('/jogador') }}">Jogadores</a></li> 
                <li class="nav-item"><a  class="nav-link" href="{{ url('/jogo') }}">Jogos</a></li>
                <li class="nav-item"><a  class="nav-link" href="{{ url('/equipe') }}">Equipes</a></li>        
                <li class="nav-item"><a  class="nav-link" href="{{ url('/campeonato') }}">Campeonatos</a></li>    
                <li class="nav-item"><a  class="nav-link" href="{{ url('/partida') }}">Partidas e Desafios</a></li>    
            <ul>
        </div>
    </nav>

    @yield('content')
    
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script> 
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
</body>
</html>

