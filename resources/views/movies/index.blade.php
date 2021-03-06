<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($movies as $movie)
        <a href="{{route('movies.show', $movie->id)}}"><h2>{{ $movie->title }}</h2></a>
        <form method="POST" action="{{route('movies.destroy', $movie->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
    @endforeach
    <br>
    <a href="{{route('movies.create')}}">Crea nuovo film</a>
</body>
</html>