<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    @extends('layout')
    @section('konten')
    <a href="/home">Home</a>
    <h1>Ini adalah about page</h1>
    <p>Ini adalah website buatan {{$nama}}</p>
    <p>Dibuat untuk belajar framework laravel</p>

    @endsection
</body>
</html>