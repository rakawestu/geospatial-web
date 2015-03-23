<!DOCTYPE html>
<html>
<head>
    <title>Daftar Desa</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('location/index') }}">Desa Rawan Longsor</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('location/index') }}">Tampilkan semua desa</a></li>
        <li><a href="{{ URL::to('location/index/create') }}">Masukkan data desa</a></li>
    </ul>
</nav>

<h1>Data Desa Rawan Longsor</h1>

<h2>Aplikasi untuk CRUD (Create Read Update Delete) data untuk desa rawan longsor di Jogja.</h2>
</div>
</body>
</html>