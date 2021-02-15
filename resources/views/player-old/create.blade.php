@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Cadastro de Jogador</h1>

        <form action="<?= url('/jogador/store') ?>" method="post">

            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" id="nickname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="jogos[]">Jogos:</label>
                <select class="js-example-basic-multiple form-control" name="jogos[]" multiple="multiple">
                    @foreach ($jogos as $jogo)
                        <option value="{{$jogo->id}}">{{$jogo->titulo}}</p>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="perfil_externo">Perfil Externo:</label>
                <input type="text" name="perfil_externo" id="perfil_externo" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Jogador</button>
        </form>
    </div>

@endsection

<script> 
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>



