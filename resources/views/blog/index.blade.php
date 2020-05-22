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
            <a href="{{route('blog.show', $post->id)}}">View</a>
            <a href="{{route('blog.edit', $post->id)}}">Edit</a>
            <form action="{{route('blog.destroy', $post->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Remove</button>
            </form>
        @endforeach
    </body>
</html>
