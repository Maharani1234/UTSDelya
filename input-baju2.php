<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil input</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-baju.php" method="POST">
					<div class="form-group">
						<label for="id_baju">ID BAJU</label>
						<input type="number" name="id_baju" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama_baju">Nama Baju</label>
		<input type="text" name="nama_baju" class="form-control">
	</div>

	<div class="form-group">
		<label for="harga">Harga </label>
	<input type="text" name="harga" class="form-control">
	</div>

		<div class="form-group">
		<label for="bahan">Bahan</label>
	<input type="text" name="bahan" class="form-control">
	</div>

		<div class="form-group">
		<label for="tanggal_masuk">Tanggal Masuk</label>
	<input type="date" name="tanggal_masuk" class="form-control">
	</div>

		<div class="form-group">
		<label for="ukuran">Ukuran</label>
	<input type="text" name="ukuran" class="form-control">
	</div>

		<div class="form-group">
		<label for="stok_baju">Stok Baju</label>
	<input type="number" name="stok_baju" class="form-control">
	</div>

		<div class="form-group">
		<label for="warna">Warna</label>
	<input type="text" name="warna" class="form-control">
	</div>

	

<input type="submit" name="kirim" value="simpan" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>