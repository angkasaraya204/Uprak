<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Allerta&family=Imbue:wght@200&family=Overlock:wght@700&family=Saira+Condensed:wght@300&family=Sen&family=Staatliches&family=Kaushan+Script&family=Teko&family=Pathway+Gothic+One&display=swap"
        rel="stylesheet">


    <title>Uji Lavel 3</title>
</head>

<body>

    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container">
                <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse text-center navbar-collapse" id="navbarNavAltMarkup">
                    <a class="navbar-brand ms-4" href="#">Angkasa Raya</a>
                    <div class="navbar-nav">
                        <a class="nav-link active" href="./index.php">Home</a>
                        <a class="nav-link" href="#">Tambah Produk</a>
                    </div>
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <section id="label">
        <div class="container">
            <div class="row">
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="./img/label1.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Harga 1 jtan Saja</h5>
                            <p class="card-text">Produktivitas Maksimum <br> Harga Terjangkau</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="../ujilvl3/img/label2.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Laptop Bisnis</h5>
                            <p class="card-text">Ada Berbagai Laptop <br> Untuk Berbisnis</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm mt-3">
                    <div class="card bg-light text-black">
                        <img src="../ujilvl3/img/label3.png" class="card-img ms-auto" alt="...">
                        <div class="card-img-overlay mt-2">
                            <h5 class="card-title">Harga 50rban Saja</h5>
                            <p class="card-text">Mouse & <br> Keyboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tabel-list">
        <div class="container mt-4">
        <?php
            include 'koneksi.php';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT * FROM allproduk WHERE id='$id'";
                $query = mysqli_query($connect, $sql);
                $row = mysqli_fetch_assoc($query);
            }
            ?>
            
                    <div class="container">
                    <form action="edit.php" method="POST">
                        <div class="row">
                        <div class="col-sm">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?php echo $row["nma_produk"];?>">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="text" class="form-control" name="gambar" placeholder="Masukan Link" value="<?php echo $row["gambar"];?>">
                            </div>
                        </div>
                        <div class="col-sm">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk:</label>
                            <input type="number" class="form-control" name="harga" placeholder="Masukan Harga" value="<?php echo $row["hrga_produk"];?>">
                            </div>
                        </div>
                        <div class="col-sm">
                        <div class="mb-3">
                            <label class="form-label">Quantity:</label>
                            <input type="number" class="form-control" name="qty" placeholder="Masukan Quantity" value="<?php echo $row["quantity"];?>">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desk"><?php echo $row["desk"];?></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-success" name="simpan" value="simpan">
                                </div>
                                <div class="col-sm">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Keunggulan:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="unggul"><?php echo $row["unggul"];?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" value="<?php echo $row["id"];?>" name="id">
                            </div>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid mt-5">
            <div class="row text-light">
                <div class="col-md-5 mt-2">
                    <img src="img/logo.png" alt="">
                    <h5 class="text-center mt-3">Angkasa Raya <br> Uji Level </h5>
                    <div class="footer-text text-center mt-3">
                        <p><i class="fas fa-envelope-open"></i> Kirim E-mail</p>
                        <p><i class="fab fa-facebook-square"></i> Facebook Page</p>
                        <p><i class="fab fa-whatsapp-square"></i> Chat Whatsapp</p>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <h3>TENTANG KAMI</h3>
                    <div class="footer-text ms-1 mt-3">
                        <p>Ketentuan Layanan</p>
                        <p>Kebijakan Privasi</p>
                        <p>Konfirmasi Pembayaran</p>
                        <p>Testimoni</p>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <h3>HUBUNGI KAMI</h3>
                    <div class="footer-text ms-1 mt-3" id="kontak">
                        <p><i class="fas fa-phone-square-alt"></i> Telepon: +62 857 1879 6820</p>
                        <p><i class="far fa-comments"></i> SMS: +62 857 1879 6820</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hakcipta">
            Copyright &copy; 2021 - Angkasa Raya
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>