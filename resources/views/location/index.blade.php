<!-- app/views/nerds/index.blade.php -->

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
        <a class="navbar-brand" href="{{ URL::to('location/home') }}">Desa Rawan Longsor</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('location/index') }}">Tampilkan semua desa</a></li>
        <li><a href="{{ URL::to('location/index/create') }}">Masukkan data desa</a></li>
    </ul>
</nav>

<h1>Tampilkan Data Desa</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nama Desa</td>
            <td>Lintang</td>
            <td>Bujur</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
    @foreach($location as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nama_desa }}</td>
            <td>{{ $value->latitude }}</td>
            <td>{{ $value->longitude }}</td>
            <td>{{ $value->keterangan_desa }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('location/index/' . $value->id) }}">Tampilkan</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('location/index/' . $value->id . '/edit') }}">Sunting</a>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                <form method="post" action="{{ URL::to('location/index/'.$value->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                    <button type="submit" class="btn btn-warning">Hapus</button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>