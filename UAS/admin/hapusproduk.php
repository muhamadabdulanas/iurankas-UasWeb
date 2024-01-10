resep_produk<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id='$_GET[id]'");
$koneksi->query("DELETE FROM produk WHERE id='$_GET[id]'");
echo "<script> alert('Produk Terhapus'); </script>";
echo "<script> location='index.php?hal=produk'; </script>";

?>