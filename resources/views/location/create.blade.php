<!DOCTYPE html>
<html>
<head>
    <title>Masukkan Data Desa</title>
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

<h1>Masukkan Data Desa</h1>

<form class="form-horizontal" role="form" method="POST" action="{{ url('location/index') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label class="col-md-4 control-label">Nama Desa</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="nama_desa" value="{{ old('nama_desa') }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Lintang</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="latitude" value="{{ old('latitude') }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Bujur</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="longitude" value="{{ old('longitude') }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Keterangan</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="keterangan_desa" value="{{ old('keterangan_desa') }}">
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