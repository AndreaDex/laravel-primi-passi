<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>

<body>



    <H2>{{$hello}}</H2>
    <h2>{{$word}}</h2>

    @foreach ($user as $utente)
    @if($loop->first)
    <span>&downarrow; &downarrow; &downarrow; &downarrow; </span>
    @endif
    <h3>Benvenut* :{{$utente}}</h3>
    @if(!$loop->last)
    <span>&star;; &star; &star; &star; </span>
    @endif
    @if($loop->last)
    <span>&uparrow; &uparrow; &uparrow; &uparrow; </span>
    @endif



    @endforeach
</body>

</html>