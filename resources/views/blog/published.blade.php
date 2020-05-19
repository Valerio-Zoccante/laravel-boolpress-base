@foreach ($posts as $post)
    <h2>{{$post->title}}</h2>
    <h4>{{$post->text}}</h4>
@endforeach
