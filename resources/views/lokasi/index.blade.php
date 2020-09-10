<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Lokasi</title>
</head>

<body>
    <a href="/lokasi/input">Tambah Data</a>
    <form method="GET" action='/lokasi'>
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Detail</th>
            <th>Alamat</th>
            <th>Harga Test</th>
            <th>Opsi</th>
        </tr>
        @foreach($lokasi as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->detail }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->harga }}</td>
            <td><a href="/lokasi/{{ $p->id }}">Edit</a> <a href="/lokasi/delete/{{ $p->id }}">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>