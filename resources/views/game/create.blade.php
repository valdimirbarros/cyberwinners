@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Cadastro de Jogo</h1>

        <form action="<?= url('/jogo/store') ?>" method="post">

            <?= csrf_field() ?>
            <div class="form-group">
                <label for="titulo">Título do Jogo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="abreviatura">Abreviatura</label>
                <input type="text" name="abreviatura" id="abreviatura" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
        </form>
    </div>
@endsection
