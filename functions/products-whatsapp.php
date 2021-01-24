<?php
if(isset($_GET['name'])){
    $message = $_POST['greeting'] . "%0D%0A%0D%0A----------Order Pembelian----------%0D%0ANama Produk : " . $_GET['name'] . "%0D%0AHarga : Rp" . number_format($_GET['price']) . "%0D%0ANama Pembeli : " . $_POST['buyer'] . "%0D%0AAlamat : " . $_POST['alamat'] . "%0D%0AMetode Pembayaran : " . $_POST['payment'] . "%0D%0ATambahan : " . $_POST['feature'];
    header("Location: https://wa.me/" . $_POST['nomortelp'] . "?text=" . $message);
}
?>