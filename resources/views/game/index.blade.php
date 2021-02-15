@extends('master')

@section('content')
    <div class="container my-3">
        <h1 class="text-center display-4">Listagem de Jogos</h1>

        @if (session('status-success'))
            <div class="alert alert-success">
                {{ session('status-success') }}
            </div>
        @elseif(session('status-error'))
            <div class="alert alert-danger">
                {{ session('status-error') }}
            </div>
        @endif

        <a href="{{url('/jogo/cadastro')}}" class="btn btn-dark">Cadastrar Novo Jogo</span> </a>
            <table class="table table-striped table-hover table-dark table-bordered my-2">
                <thead>
                    <td>Título</td>
                    <td>Abreviatura</td>
                    <td>Descrição</td>
                    <td>Ações</td>
                </thead>
                @foreach ($games as $game)
            <tr>
                <td width="17%">{{$game->title}}</td>
                <td width="5%">{{$game->abbreviation}}</td>
                <td width="47%">{{$game->description}}</td>
            <td>
                <a href='{{url('/jogo/' . $game->slug)}}' class="btn btn-light" >Ver mais</a> 
                <a href='{{url('/jogo/' . $game->slug . '/editar/')}}' class="btn btn-secondary">Editar</a> 
                <button onclick="removeGame('{{$game->slug}}')" class="btn btn-danger">Remover</a></td>
            </tr>    
        @endforeach
            </table>
        
            

    </div>

    <script>
        function removeGame(slug){
            $.ajax({
                type:'DELETE',
                url: '{{url('/jogo/')}}/' + slug,
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




