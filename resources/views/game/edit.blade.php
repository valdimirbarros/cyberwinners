@extends('master')

@section('content')

    <div class="container my-3">

        <h1 class="text-center display-4">Formulário de Edição de Jogo</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


        <form action='{{url('/jogo/' . $game->slug)}}' method="post">
            @csrf
            
            @method('PUT')
            <div class="form-group">
                <label for="title">Título do Jogo</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$game->title}}" required>
            </div>

            <div class="form-group">
                <label for="abbreviation">Abreviatura</label>
                <input type="text" name="abbreviation" id="abbreviation" class="form-control" value="{{$game->abbreviation }}">
            </div>

            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$game->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Editar Jogo</button>
        </form>
    </div>
@endsection

