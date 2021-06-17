<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis Series</title>
</head>
<body>
    <h1>Series</h1>
    <a href="{{route('create')}}"> 
        <button> Create New Serie</button>
    </a>
    <ul>
        @foreach ($series as $serie)
        <li>{{$serie->name}}</li>
        <a href="{{route('seeMore', $serie->id)}}">
            <button>See More</button>
        </a>
        <a href="{{route('edit', $serie->id)}}">
        <button>Edit</button>
        </a>
        @endforeach
    </ul>
</body>
</html>