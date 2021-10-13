<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit</h1>
    <form method='POST' action="{{ route('movies.update', $movie->id) }}">
        @method('PATCH')
        @csrf
        <label for="title">Title</label>
        <input type="text" name='title' id='title' value="{{ $movie->title}}">
        <label for="overview">Descrizione</label>
        <textarea name="overview" id="overview" cols="30" rows="10">
            {{$movie->overview}}
        </textarea>
        <button type="submit">Modifica</button>
    </form>
</body>
</html>