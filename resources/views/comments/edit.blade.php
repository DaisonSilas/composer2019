<form action="{{route("comments.update", $comment)}}" method="post">
    @csrf
    @method('PUT')
    <textarea name="comentario" id="" cols="30" rows="10" class="form-control">{{$comment->comentario}}</textarea>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="submit" value="Comentar" class="btn btn-success">
</form>
