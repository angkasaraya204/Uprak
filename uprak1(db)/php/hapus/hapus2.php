<?php
include '../koneksi.php';
    if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM `cart` WHERE `id`='$id'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: ../cart.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>