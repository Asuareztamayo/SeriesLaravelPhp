<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{route('update', [$serie->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Title:</label>
        <input name="name" type="text" value="{{$serie->name}}">

        <label for="cast">Cast:</label>
        <input name="cast" type="text" value="{{$serie->cast}}">

        <label for="seassons">Seasons:</label>
        <input name="seassons" type="number" value="{{$serie->seassons}}">

        <label for="description">Description:</label>
        <input name="description" type="text" value="{{$serie->description}}">

        <label for="opinion">Opinion:</label>
        <input name="opinion" type="text" value="{{$serie->opinion}}">

        <button type="submit">Edit</button>
    </form>
</body>
</html>
