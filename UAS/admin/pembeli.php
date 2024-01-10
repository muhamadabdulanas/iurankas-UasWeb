<h2>iuran kas</h2>


<div style="color: white;
padding: 15px 10px 5px 50px;
float: right;
font-size: 16px;"><a href="index.php?hal=tambahproduk" class="btn btn-primary">Tambah Data</a>
</div>


<table class="table table-bordered">
	<thead>

		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Tanggal </th>
			<th>Bulan </th>
			<th>Tahun</th>
			<th>jumlah</th>
		</tr>
	</thead>

	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query(" SELECT * FROM pembelian"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $pecah['id']; ?> </td>
			<td> <?php echo $pecah['Nama']; ?> </td>
			<td> <?php echo $pecah['Tanggal']; ?></td>
			<td> <?php echo $pecah['Bulan']; ?></td>
			<td> <?php echo $pecah['Tahun']; ?></td>
			<td> <?php echo $pecah['jumlah']; ?></td>
			
			
			<td>
				<a href="index.php?hal=hapusproduk&id=<?php echo $pecah['id']; ?>" class="btn-danger btn">Hapus</a>
			</td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>


