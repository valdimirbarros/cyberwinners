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

        
        <a href="{{url('/jogador/cadastro')}}" class="btn btn-primary">Cadastrar Novo jogador</span> </a>
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
            <td>
                <a href='{{url('/jogador/' . $player->slug)}}' class="btn btn-primary" >Ver mais</a> 
                <a href='{{url('/jogador/' . $player->slug . '/editar/')}}' class="btn btn-warning">Editar</a> 
                <button onclick="removePlayer('{{$player->slug}}')" class="btn btn-danger">Remover</a></td>
            </tr>    
        @endforeach
            </table>
        
            

    </div>

    <script>
        function removePlayer(slug){
            $.ajax({
                type:'DELETE',
                url: '{{url('/jogador/')}}/' + slug,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    window.location.reload();
                }
             });
        
        }
        
    </script>

@endsection




