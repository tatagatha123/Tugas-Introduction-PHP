<?php
$nama_produk = "Buku PHP untuk Pemula";
$harga_produk = 120000;
$diskon = 0.1; //10%
$harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
?>

<h2><?php echo $nama_produk; ?></h2>
<p>Harga: Rp <?php echo $harga_produk; ?></p>
<p>Harga setelah diskon: Rp <?php echo $harga_setelah_diskon; ?></p>

