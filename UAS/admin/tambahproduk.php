<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>NIK</label>
		<input type="text" class="form-control" name="nik">
	</div>
	<div class="form-grup">
		<label>Warga</label>
		<input type="text" class="form-control" name="warga">
	</div>
	<div class="form-grup">
		<label>NoRumah</label>
		<input type="number" class="form-control" name="norumah">
	</div>
	<div class="form-grup">
		<label>JenisKelamin</label>
		<input type="text" class="form-control" name="jeniskelamin">
	</div>	
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat" rows="10"></textarea>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php  
	if (isset($_POST['save'])) {

		
		//input ke data base
		$koneksi->query("INSERT INTO produk
		(nik,warga,norumah,jeniskelamin,alamat,status)
			VALUES('$_POST[nik]','$_POST[warga]','$_POST[norumah]','$_POST[jeniskelamin]','$_POST[alamat]','$_POST[status]')");

		echo "<div class='aler alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?hal=produk'>";
	}

?>

