<!DOCTYPE html>
<html>
<head>
    <title>Sunting Desa</title>
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

<h1>Edit {{ $location->nama_desa }}</h1>

<!-- if there are creation errors, they will show here -->
<form class="form-horizontal" role="form" method="post" action="{{ url('location/index/'.$location->id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="put">
    <div class="form-group">
        <label class="col-md-4 control-label">Nama Desa</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="nama_desa" value="{{ $location->nama_desa }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Lintang</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="latitude" value="{{ $location->latitude }}" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Bujur</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="longitude" value="{{ $location->longitude }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Keterangan</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="keterangan_desa" value="{{ $location->keterangan_desa }}">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Masukkan</button>
        </div>
    </div>
</form>

</div>
</body>
</html>