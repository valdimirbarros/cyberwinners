@extends('master')

@section('content')

    <div class="container my-3">
        <h1 class="text-center display-4">Informações sobre o Jogo</h1>

        <h2><strong>Título:</strong> {{$game->title }}</h2>
    
        <h2><strong>Abreviatura:</strong> {{$game->abbreviation}}</h2>

        <h2><strong>Descrição:</strong> <em>{{$game->description}}</em></h2>

        <h2><strong>Quantidade de Jogadores: </strong></h2>

        <h2><strong>Quantidade de Equipes: </strong></h2>

        <h2><strong>Quantidade de Campeonatos: </strong></h2>

        <h2><strong>Quantidade de Partidas: </strong></h2>
      
    <div>
@endsection
