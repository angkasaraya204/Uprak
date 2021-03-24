<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $gambar = $_POST['gambar'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $qty = $_POST['qty'];
    $desk = $_POST['desk'];
    $unggul = $_POST['unggul'];

    $sql = "UPDATE `allproduk` SET nma_produk='$nama', gambar='$gambar', hrga_produk='$harga', quantity='$qty', desk='$desk', unggul='$unggul' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: index.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>