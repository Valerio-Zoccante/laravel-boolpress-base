<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<form action="{{route('blog.update', $post->id)}}" method="post">
  @csrf
  @method('PUT')
    <div>
      <label for="title">Title</label>
      <input type="text" placeholder="Insert the title" name="title" value="{{$post->title}}">
    </div>
    <div>
      <label for="body">Text</label>
      <textarea name="body">{{$post->body}}</textarea>
    </div>
    <div>
      <label for="author">Author</label>
      <input type="text" placeholder="Insert the author" name="author" value="{{$post->author}}">
    </div>
    <div>
      <label for="not-published">Non Pubblished</label>
      <input type="radio" id="not-published" name="published" value="0" {{($post->published == 0) ? 'checked' : ''}}>
      <label for="published">Pubblished</label>
      <input type="radio" id="published" name="published" value="1" {{($post->published == 1) ? 'checked' : ''}}>
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</body>
</html>
