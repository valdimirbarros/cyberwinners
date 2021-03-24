@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="display-4 text-center my-1">Informações sobre o Jogador</h1>

        <h2><strong>Nome: </strong>{{$player->name}}</h2>
    
        <h2><strong>Nickname: </strong>{{$player->nickname}}</h2>

        <h2><strong>Descrição: </strong><em>{{$player->description}}</em></h2>

        <h2><strong>Email: </strong>{{$player->email}}</h2>

        <h2><strong>Perfil Externo: </strong><a href="{{$player->external_profile}}">{{$player->external_profile}}</a></h2>

        <h2><strong>Jogos: </strong> 
            @foreach ($player->link_player_game as $item)
               <span class="badge badge-secondary">{{$item->game->title}}</span>
            @endforeach  
        </h2>

        <h2><strong>Equipes vinculadas: </strong></h2>

        <h2><strong>Campeonatos vinculados: </strong></h2>

        <h2><strong>Partidas Vencidas: </strong></h2>

        <h2><strong>Desafios ganhos: </strong></h2>

        <h2><strong>Pontuação: </strong></h2>

    <div>
@endsection

