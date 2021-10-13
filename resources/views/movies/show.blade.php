<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$movie->title}}</h1>
    <p>{{$movie->overview}}</p>
    <a href="{{route('movies.edit', $movie->id)}}">
        <div>Modifica</div>
    </a>
    <a href="{{route('movies.index')}}">
        <div>torna all'indice</div>
    </a>
</body>
</html>