@extends('master')

@section('content')
    <div class="container my-3">
        <h1 class="text-center display-4">Listagem de Jogadores</h1>
        <a href="<?= url('/jogador/cadastro') ?>" class="btn btn-primary">Cadastrar Novo Jogador</span> </a>
            <table class="table table-striped table-hover my-2">
                <thead class='bg-primary text-white'>
                    <td>Nome</td>
                    <td>Nickname</td>
                    <td>Descrição</td>
                    <td>Pontuação</td>
                    <td>Ações</td>
                </thead>
                @foreach ($players as $player)
            <tr>
                <td width="17%">{{$player->name}}</td>
                <td width="5%">{{$player->nickname}}</td>
                <td width="40%">{{$player->description}}</td>
                <td width="5%">{{$player->pontuation}}</td>
            <td><a href='{{url('/player/' . $player->slug)}}' class="btn btn-primary" >Ver mais</a> <a href='{{url('/player/editar/' . $player->slug)}}' class="btn btn-warning">Editar</a> <a
                    onclick="removePlayer({{url('/player/' . $player->slug)}})" class="btn btn-danger">Remover</a></td>
            </tr>    
        @endforeach
            </table>
        
            

    </div>

@endsection

