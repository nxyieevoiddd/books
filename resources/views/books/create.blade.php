<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>form</h1>
    <form action="/books" method="post" >
        @csrf
        <div >
            <label for="title">Enter title: </label>
            <input type="text" name="title" id="title" />
        </div>
        <div >
            <label for="author">Enter author: </label>
            <input type="text" name="author" id="author" />
        </div>
        <div >
            <label for="release_at">Enter release date: </label>
            <input type="text" name="release_at" id="release_at" />
        </div>
        <div >
            <label for="description">Enter description: </label>
            <input type="text" name="description" id="description" />
        </div>
        <div >
            <input type="submit" value="Sumbit" />
        </div>
    </form>
</body>
</html>