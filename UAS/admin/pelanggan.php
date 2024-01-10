<h2>Laporan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>jumlah</th>
		</tr>
	</thead>

	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $nomor; ?></td>
			<td> <?php echo $pecah["Nama"]; ?></td>
			<td> <?php echo $pecah["Bulan"]; ?></td>
			<td> <?php echo $pecah["Tahun"]; ?></td>
			<td> <?php echo $pecah["jumlah"]; ?></td>
			
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>