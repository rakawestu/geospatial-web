<!DOCTYPE html>
<html>
<head>
    <title>Data Desa</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('location/home') }}">Desa Rawan Longsor</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('location/index') }}">Tampilkan semua desa</a></li>
        <li><a href="{{ URL::to('location/index/create') }}">Masukkan data desa</a></li>
    </ul>
</nav>

<h1>Desa {{ $location->nama_desa }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $location->nama_desa }}</h2>
        <p>
            <strong>Lintang:</strong> {{ $location->latitude }}<br>
            <strong>Bujur:</strong> {{ $location->longitude }}<br>
            <strong>Keterangan:</strong> {{ $location->keterangan_desa}}
        </p>
    </div>

</div>
</body>
</html>