<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <center>
        <h1>Andreas Adi Minarso</h1>
        <h1>No : 2 {{$nama}}  {{$kelas}}</h1>

        @if($nama=='admin')
        <a href ="">Kehalaman Admin</a>
        @elseif($nama=='user')
        <a href ="">Kehalaman User</a>
        @else
        <h2>Anda Bukan Admin Dan User</h2>
        @endif

        @switch($buah)
        @case(1)
        First case...
        @break
        @default
        default case..
        @endswitch
        <br>

        @foreach ($buah as $b)
        <p>Buah {{$b}}</p>
        
        @endforeach
    </center>
</body>
</html>
