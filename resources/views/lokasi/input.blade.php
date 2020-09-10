<body>
	<h3>Lokasi</h3>
	<form action="/lokasi/input" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Detail <textarea type="text" name="detail" required="required"></textarea> <br/>
		Alamat <textarea type="number" name="alamat" required="required"></textarea> <br/>
		Harga Test <input type="number" name="harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>