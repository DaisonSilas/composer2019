@extends('layouts.hello')

@section('conteudo')
    <h1>Aleterar post</h1>

    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" value="{{$post->titulo}}" name="titulo" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea name="descricao" id="" cols="30" rows="10"
                      class="form-control">{{$post->descircao}}</textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Salvar" class="btn btn-success">
        </div>
    </form>
@endsection
