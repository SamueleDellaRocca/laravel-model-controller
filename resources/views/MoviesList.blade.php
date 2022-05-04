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
    @foreach ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
    @endforeach
</body>
</html>