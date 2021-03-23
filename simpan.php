<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $gambar = $_POST['gambar'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $qty = $_POST['qty'];
        $desk = $_POST['desk'];
        $unggul = $_POST['unggul'];

    $sql = "INSERT INTO `allproduk` (`nma_produk`, `gambar`, `hrga_produk`, `quantity`, `desk`, `unggul`) VALUES ('$nama', '$gambar', '$harga', '$qty', '$desk', '$unggul')";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    } else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>