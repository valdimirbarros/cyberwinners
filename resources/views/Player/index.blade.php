@extends('master')

@section('content')
    <div class="container my-3">
        <h1 class="text-center display-4">Listagem de jogadores</h1>

        @if (session('status-success'))
            <div class="alert alert-success">
                {{ session('status-success') }}
            </div>
        @elseif(session('status-error'))
            <div class="alert alert-danger">
                {{ session('status-error') }}
            </div>
        @endif

        
        <a href="{{url('/jogador/cadastro')}}" class="btn btn-dark">Cadastrar Novo jogador</span> </a>
            <table class="table table-striped table-hover table-dark table-bordered my-2">
                <thead>
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
            <td>
                <div class="d-flex justify-content-around">
                    <a href='{{url('/jogador/' . $player->slug)}}' class="btn btn-light">Ver mais</a> 
                    <a href='{{url('/jogador/' . $player->slug . '/editar/')}}' class="btn btn-secondary">Editar</a> 
                    <form action="{{url('/jogador/' . $player->slug)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form> 
                </div>
            </tr>    
        @endforeach
            </table>
        
    </div>

@endsection




