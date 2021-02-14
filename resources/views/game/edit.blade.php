@extends('master')

@section('content')

    <div class="container my-3">

        <h1  class="text-center display-4">Formulário de Edição de Jogo</h1>

        <form action="{{url('/jogo/update', ['id' => $jogo->id])}}" method="post">

            <?= csrf_field() ?>

            <?= method_field('PUT') ?>

            <div class="form-group">
                <label for="titulo">Título do Jogo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{$jogo->titulo}}" required>
            </div>

            <div class="form-group">
                <label for="abreviatura">Abreviatura</label>
                <input type="text" name="abreviatura" id="abreviatura" class="form-control" value="{{$jogo->abreviatura}}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control">{{$jogo->descricao}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Alterar Jogo</button>
        </form>
    </div>
@endsection
