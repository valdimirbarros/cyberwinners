@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Cadastro de jogador</h1>


        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <form action='{{url('/jogador/' . $player->slug)}}' method="post">

            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$player->name}}" required>
            </div>

            <div class="form-group">
                <label for="nickname">Nickname:</label>
                <input type="text" name="nickname" id="nickname" class="form-control" value="{{$player->nickname}}" >
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$player->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="games">Jogos:</label>
                <select id="games" class="form-control" name="games[]" multiple="multiple">
                    @foreach ($games as $game)
                            <option {{ in_array($game->id,$playerGamesIds) ? 'selected' : '' }} value={{ $game->id }}>{{ $game->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$player->email}}">
            </div>

            <div class="form-group">
                <label for="external_profile">Perfil Externo:</label>
                <input type="text" name="external_profile" id="external_profile" class="form-control" value="{{$player->external_profile}}">
            </div>

            <button type="submit" class="btn btn-primary">Editar jogador</button>
        </form>
    </div>

@endsection


