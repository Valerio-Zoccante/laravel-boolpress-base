<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        @foreach ($posts as $post)
            <h2><a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h2>
            <h4>{{$post->author}}</h4>
            <small>{{$post->body}}</small>
        @endforeach
    </body>
</html>
