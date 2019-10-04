<h2>Comentários</h2>
@foreach($post->comments as $comment)
    <div class="container">
        <div class="row">
            <div class="text-left col-8">
                {{$comment->comentario}}
            </div>

                <div class="text-center col-2">
                    <a href="{{route('comments.edit', $comment)}}">Editar</a>
                </div>

            <div class="text-center col-1">
                <form action="{{route('comments.destroy', $comment)}}" method="post" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-light">Excluir</button>
                </form>
            </div>
        </div>
    </div> <br>

@endforeach


