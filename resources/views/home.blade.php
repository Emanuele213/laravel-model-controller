<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="{{mix ('css/app.css')}}">
</head>
<body>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <p><span>Titolo:</span> {{ $movie->title }}</p>
                <p><span>Titolo Originale:</span> {{ $movie->original_title }}</p>
                <p><span>Nazionalita':</span> {{ $movie->nationality }}</p>
                <p><span>Data di uscita:</span> {{ $movie->date }}</p>
                <p><span>Voto:</span> {{ $movie->vote }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
