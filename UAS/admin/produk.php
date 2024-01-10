<h2>Data Warga</h2>


<div style="color: white;
padding: 15px 10px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?hal=tambahproduk" class="btn btn-primary">Tambah Data</a>
</div>


<table class="table table-bordered">
	<thead>

		<tr>
			<th>No</th>
			<th>Nik</th>
			<th>Nama Warga</th>
			<th>Jenis Kelamin </th>
			<th>Alamat </th>
			<th>No Rumah</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query(" SELECT * FROM produk"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $pecah['id']; ?> </td>
			<td> <?php echo $pecah['NIK']; ?> </td>
			<td> <?php echo $pecah['Warga']; ?></td>
			<td> <?php echo $pecah['JenisKelamin']; ?></td>
			<td> <?php echo $pecah['Alamat']; ?></td>
			<td> <?php echo $pecah['NoRumah']; ?></td>
			<td> <?php echo $pecah['Status']; ?></td>
			
			<td>
				<a href="index.php?hal=hapusproduk&id=<?php echo $pecah['id']; ?>" class="btn-danger btn">Hapus</a>
			</td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>


