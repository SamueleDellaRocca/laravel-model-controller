<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">

    @foreach ($movies as $movie)
        <div class="carta">
            <h1>Titolo Film: {{ $movie->title }}</h1>
            <h2>Titolo Originale: {{ $movie->original_title }}</h2>
            <h3>Nazionalità: {{ $movie->nationality }}</h3>
            <h4>Anno di Uscita: {{ $movie->date }}</h4>
            <h5>Voto Film: {{ $movie->vote }}</h5>
        </div>
    @endforeach
    </div>
    
</body>
</html>