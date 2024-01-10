<h2>Ubah Produk</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nik</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['NIK']; ?>">
	</div>
	<div class="form-group">
		<label>Warga</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['Warga']; ?>">
	</div>
	<div class="form-group">
		<label>NoRumah </label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['NoRumah']; ?>">
	</div>
	<div class="form-group">
		<label>JenisKelamin </label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['JenisKelamin']; ?>">
	</div>

	<div class="form-group">
		<label>Status</label>
		<input type="number" class="form-control" name="stok" value="<?php echo $pecah['Status']; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="deskripsi" rows="10"> <?php echo $pecah['Alamat']; ?></textarea>
	</div>
	<div class="form-group">
		<label>File : </label><br>
		<a href="resep_produk/<?php echo $detail['resep_produk'];?>"><label><?php echo $pecah['file']; ?></label></a>
	</div>
	<div class="form-group">
		<label>Ganti File</label>
		<input type="file" class="form-control" name="resep">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
	
	if (isset($_POST['ubah'])) {
		//foto
		$namafoto = $_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		

		//jika foto diubah
		if (!empty($lokasifoto)) {
			move_uploaded_file($lokasifoto,"../foto_produk/$namafoto");

			$koneksi->query("UPDATE produk SET NIK='$_POST[NIK]', Warga='$_POST[Warga]', JenisKelamin='$_POST[JenisKelamin]', Alamat='$_POST[Alamat]', NoRumah='$_POST[NoRumah]' Status='$_POST[Status]',WHERE id = '$_GET[id]'");
		}
		//jika tidak
		else {
			$koneksi->query("UPDATE produk SET NIK='$_POST[NIK]', Warga='$_POST[Warga]', JenisKelamin='$_POST[JenisKelamin]', Alamat='$_POST[Alamat]', NoRumah='$_POST[NoRumah]' Status='$_POST[Status]',WHERE id = '$_GET[id]'");
		}
//-----------------------------------------------------------------------
		//file resep
		$namaresep = $_FILES['resep']['name'];
		$lokasiresep = $_FILES['resep']['tmp_name'];
		
		//jika file diubah
		if (!empty($lokasiresep)) {
			move_uploaded_file($lokasiresep, "../resep_produk/$namaresep"); 

			$koneksi->query("UPDATE produk SET NIK='$_POST[NIK]', Warga='$_POST[Warga]', JenisKelamin='$_POST[JenisKelamin]', Alamat='$_POST[Alamat]', NoRumah='$_POST[NoRumah]' Status='$_POST[Status]',WHERE id = '$_GET[id]'");
		}
		//jika tidak
		else {
			$koneksi->query("UPDATE produk SET NIK='$_POST[NIK]', Warga='$_POST[Warga]', JenisKelamin='$_POST[JenisKelamin]', Alamat='$_POST[Alamat]', NoRumah='$_POST[NoRumah]' Status='$_POST[Status]',WHERE id = '$_GET[id]'");
		}

	echo "<script> alert('Produk Terubah'); </script>";
	echo "<script> location='index.php?hal=produk'; </script>";
	}
?>