<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Serie</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <label for="name">Title:</label>
        <input name="name" type="text">

        <label for="cast">Cast:</label>
        <input name="cast" type="text">

        <label for="seassons">Seasons:</label>
        <input name="seassons" type="number">

        <label for="description">Description:</label>
        <input name="description" type="text">

        <label for="opinion">Opinion:</label>
        <input name="opinion" type="text">

        <button type="submit">Create New Serie</button>
    </form>
</body>
</html>