<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<form action="{{route('blog.store')}}" method="post">
  @csrf
  @method('POST')
    <div>
      <label for="title">Title</label>
      <input type="text" placeholder="Insert the title" name="title">
    </div>
    <div>
      <label for="body">Text</label>
      <textarea name="body"></textarea>
    </div>
    <div>
      <label for="author">Author</label>
      <input type="text" placeholder="Inserisci the author" name="author">
    </div>
    <div>
      <label for="not-published">Not Pubblished</label>
      <input type="radio" id="not-published" name="published" value="0">
      <label for="published">Pubblished</label>
      <input type="radio" id="published" name="published" value="1">
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</body>
</html>
