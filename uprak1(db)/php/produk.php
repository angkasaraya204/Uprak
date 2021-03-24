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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Allerta&family=Imbue:wght@200&family=Overlock:wght@700&family=Saira+Condensed:wght@300&family=Sen&family=Staatliches&family=Kaushan+Script&family=Teko&family=Pathway+Gothic+One&display=swap"
        rel="stylesheet">

    <title>Uprak</title>

    <style>
        .dark-mode {
            background-color: black;
            color: black;
        }
    </style>
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
                        <a class="nav-link" href="./tambah.php">Tambah Produk</a>
                        </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" onclick="darkmode()" type="checkbox"
                            id="flexSwitchCheckDefault">
                    </div>
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="ms-3">
                        <a type="submit" href="./login.php" class="btn btn-outline-light" role="button">Login <i class="fas fa-sign-in-alt"></i></a>
                    </div>
                    <div class="ms-3">
                        <a type="submit" href="./keranjang.php" class="btn btn-outline-light" role="button">Cart <i
                                class="fas fa-shopping-basket"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/32fb02-MB (3).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/bc398a-mb-.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/d8b6af-MB-A-.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="detailproduk">
        <div class="container">
        <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                    $sql = "SELECT * FROM `allproduk` WHERE id='$id'";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
                <div class="row row-cols-2">
                    <img src="<?php echo $row["gambar"];?>" alt="">
                    <div class="text-produk">
                        <h3 class="mt-2"><?php echo $row["nma_produk"];?></h3>
                        <div class="mb-3 row mt-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label mt-2">Harga</label>
                            <div class="col-md-8 mt-2">
                            <p><span>Rp. <?php echo number_format($row["hrga_produk"] * 0.5, 0, ',', '.');?></span></p>
                            <p style="line-height: 3px;">Harga sudah termasuk PPN</p>
                            </div>
                        </div>
                        <div class="mb-3 row mt-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Estimasi</label>
                            <div class="col-md-8 mt-2">
                            <p>Siap dikirim 2-5 hari</p>
                            </div>
                        </div>
                        <div class="mb-3 row mt-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-md-8">
                            <input type="number" disabled="disabled" class="form-control" value="<?php echo $row["quantity"];?>">
                            <p> Rp. <?php echo number_format($row["quantity"] * $row["hrga_produk"] * 0.5, 0, ',', '.');?></p>
                            </div>
                        </div>
                        <div class="mb-3 row mt-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Info. Toko</label>
                            <div class="col-md-8 mt-2">
                            <p>Dijual dan dikirim oleh PT. Angkasa, Depok.</p>
                            <a type="button" href="https://mail.google.com/mail/angkasaraya204" class="btn btn-warning"><i class="fas fa-envelope"></i></a>
                            <button type="button" class="btn btn-primary btn-md">Tambah Ke Keranjang</button>
                            </div>
                        </div>
                        <div class="mb-3 row mt-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Garansi</label>
                            <div class="col-md-8 mt-2" style="border: 1px solid black;">
                            <p style="margin: 5px;">1 Year Local Official Distributor Warranty</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section id="aboutproduk">
        <div class="container">
        <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Keunggulan</button>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <ul>
                    <?php echo "<li>".$row["desk"]."</li>";?>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php echo $row["unggul"];?></div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>

    <script>
        function darkmode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>

    <section id="footer">
        <div class="container-fluid mt-5">
            <div class="row text-light">
                <div class="col-md-5 mt-2">
                    <img src="img/logo.png" alt="">
                    <h5 class="text-center mt-3">Angkasa Raya</h5>
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