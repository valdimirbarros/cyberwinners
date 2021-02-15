@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Edição de Jogador</h1>

        <form action="{{url('/jogador/update', ['id' => $jogador->id])}}" method="post">

            <?= csrf_field() ?>

            <?= method_field('PUT') ?>

            <div class="form-group">
                <label for="nome">Nome do Jogador</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{$jogador->nome}}">
            </div>

            <div class="form-group">
                <label for="nickname">Nickname</label>
                <input type="text" name="nickname" id="nickname" class="form-control" value="{{$jogador->nickname}}">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">{{$jogador->descricao}}</textarea>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$jogador->email}}">
            </div>

            <div class="form-group">
                <label for="perfil_externo">Perfil Externo:</label>
                <input type="text" name="perfil_externo" id="perfil_externo" class="form-control" value="{{$jogador->perfil_externo}}">
            </div>

            <button type="submit" class="btn btn-primary">Alterar Jogador</button>
        </form>
    </div>
@endsection
