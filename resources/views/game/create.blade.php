@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Cadastro de Jogo</h1>

        <form action="<?= url('/jogo') ?>" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">            
            <div class="form-group">
                <label for="title">Título do Jogo</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="abbreviation">Abreviatura</label>
                <input type="text" name="abbreviation" id="abbreviation" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
        </form>
    </div>
@endsection
