<body>
    <h3>Lokasi</h3>
    @foreach($lokasi as $p)
    <form action="/lokasi/{{ $p->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}"> <br />
        Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br />
        Detail <textarea type="text" required="required" name="detail">{{$p->detail}}</textarea> <br />
        Alamat <textarea type="number" required="required" name="alamat">{{ $p->alamat }}</textarea> <br />
        Harga <input type="number" required="required" name="harga" value="{{ $p->harga }}"> <br />
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>