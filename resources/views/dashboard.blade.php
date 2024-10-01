<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ben</h1>

    <?php
        echo $users[0]['name'];

        foreach ($users as $user) {
            echo $user['name'];
            echo "<br>";
            echo $user['age'];
            echo "<br>";
            echo "<br>";
        }
    ?>

    @foreach ($users as $user)

        @if ($user['age'] >= 18)
            <h1>Pouzivatel {{$user['name']}} ktory ma {{$user['age']}} moze riadit auto.</h1>
        @else
        <h1>Pouzivatel {{$user['name']}} ktory ma {{$user['age']}} nemoze riadit auto.</h1>
        @endif

        <h1>{{ $user['name'] }}</h1>
        <h2>{{ $user['age'] }}</h2>


    @endforeach



</body>
</html>
