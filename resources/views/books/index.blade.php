<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All posts</h1>

    @foreach ($allBooks as $book)
    <h2> {{ $book->title }}</h2>
    <h2> {{ $book->author }}</h2>
    <h2> {{ $book->release_at }}</h2>
    <h2> {{ $book->description }}</h2>
    @endforeach

</body>
</html>