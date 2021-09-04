<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Postagens</title>
    </head>
    <body>
        <a href=" {{ route('posts.create') }}">Nova Postagem</a>
        <hr>
        <h1>Posts</h1>

        @foreach ($posts as $post)
            <p>{{ $post->titulo }}</p>
        @endforeach
    </body>
</html>