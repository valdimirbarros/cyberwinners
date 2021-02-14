@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="display-4 text-center my-1">Informações sobre o Jogador</h1>

        <h2><strong>Nome: </strong>{{$jogadorComVinculos['nome'] }}</h2>
    
        <h2><strong>Nickname: </strong>{{$jogadorComVinculos['nickname'] }}</h2>

        <h2><strong>Descrição: </strong><em>{{$jogadorComVinculos['descricao']}}</em></h2>

        <h2><strong>Email: </strong>{{$jogadorComVinculos['email']}}</h2>

        <h2><strong>Perfil Externo: </strong>{{$jogadorComVinculos['perfil_externo']}}</h2>

        <h2><strong>Jogos: </strong>{{$jogadorComVinculos['jogos']}}</h2>

        <h2><strong>Equipes vinculadas: </strong>SK Gaming, FURIA, Fnatic###</h2>

        <h2><strong>Campeonatos vinculados: </strong>Blast Premier, CBCS, CBLOL, Circuitão Desafiante###</h2>

        <h2><strong>Partidas Vencidas: </strong>94 ###</h2>

        <h2><strong>Desafios ganhos: </strong>8 ###</h2>

        <h2><strong>Pontuação: </strong>456 ####</h2>

    <div>
@endsection
