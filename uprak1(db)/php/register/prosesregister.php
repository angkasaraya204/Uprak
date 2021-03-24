<?php 
include "../koneksi.php"; 

$user = addslashes(strip_tags($_POST['user'])); 
$pass = addslashes(strip_tags($_POST['pass'])); 
$nama = addslashes(strip_tags($_POST['nama'])); 

if ($user&&$pass&&$nama) { //berfunsgi untuk mengecek form tidak boleh lebih dari 10 
    if (strlen($user) > 15){
        echo "username tidak boleh lebih dari 10 karakter";
} else {
    //password harus 6-25 karakter
    if (strlen($pass) > 10){
        echo "Password harus antara 1-10 karakter";
    }
    else {
    //untuk mengecek apakah form password dan form konfirmasi password sudah sama
        if ($pass){
            $sql_get = "SELECT * FROM tb_user WHERE username = '$user'";
            $query = mysqli_query($connect, $sql_get);
            $row = mysqli_fetch_array($query);
        //fungsi script ini adalah untuk mengecek ketersediaan username, jika tidak tersedia maka program akan berjalan
            if ($row == 0) {
                $pass = md5($pass);
                $sql_insert = "INSERT INTO tb_user VALUES ('', '$user', '$pass', '$nama')";
                $query2 = mysqli_query($connect, $sql_insert);
                echo "<script>alert('Pendaftaran Berhasil.');</script>";
            }
            else {
                echo "Username sudah terdaftar";
            }
        }   else {
            echo "Password yang kamu masukan tidak sama!";
            }
        }
    }
} else {
echo "Tolong penuhi form pendaftaran!";
}
?>