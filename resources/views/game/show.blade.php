@extends('master')

@section('content')

    <div class="container my-3">
        <h1 class="text-center display-4">Informações sobre o jogo</h1>

        <h2><strong>Título:</strong> {{$jogo->titulo }}</h2>
    
        <h2><strong>Abreviatura:</strong> {{$jogo->abreviatura }}</h2>

        <h2><strong>Descrição:</strong> <em>{{$jogo->descricao }}</em></h2>

        <h2><strong>Quantidade de Jogadores: 497</strong></h2>

        <h2><strong>Quantidade de Equipes: 54</strong></h2>

        <h2><strong>Quantidade de Campeonatos: 16</strong></h2>

        <h2><strong>Quantidade de Partidas: 233</strong></h2>
      
    <div>
@endsection
