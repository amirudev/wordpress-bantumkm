<?php
// THIS POINT
$message = "%0D%0A%0D%0A----------Order Pembelian----------%0D%0ANama Produk : " . $_GET['name'] . "%0D%0AHarga : Rp" . number_format($_GET['price']);
header("Location: https://wa.me/?text=" . $message);
?>