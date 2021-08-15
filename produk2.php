<!DOCTYPE html>
<html>

<head>
    <title>@Ponselku_Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="phone.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
    <link href="background.css" rel="stylesheet">
    <link href="table.css" rel="stylesheet">
</head>

<body>
    <!-- Top bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <i class="fa fa-envelope"></i>
                    nadheva17@student.uns.ac.id
                </div>
                <div class="col-sm-6">
                    <i class="fa fa-phone"></i>
                    +6285-735-691-018
                </div>
            </div>
        </div>
    </div>

    <!-- Top bar End -->


    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <!-- <img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0"> -->
            <img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
            <!-- <img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?target=home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php?target=produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keranjang.php?target=keranjang">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkout.php?target=checkout">Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nota.php?target=nota">Nota</a>
                </li>
                <!-- <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </li> -->
            </ul>
        </div class="nav-item">
        <button><a class="nav-link" href="logout.php">Logout</a></button>
        </div>
    </nav>

    <body>
        <p>
        </p>
    </body>

    <?php
    if (isset($_GET['target'])) {
        if ($_GET['target'] == 'home') {
            require('home.php');
        } elseif ($_GET['target'] == 'produk') {
            require('produk.php');
        } elseif ($_GET['target'] == 'keranjang') {
            require('keranjang.php');
        } elseif ($_GET['target'] == 'checkout') {
            require('checkout.php');
        } elseif ($_GET['target'] == 'nota') {
            require('nota.php');
        } elseif ($_GET['target'] == 'input') {
            require('input.php');
        } elseif ($_GET['target'] == 'cetakhasil') {
            require('cetakhasil.php');
        } elseif ($_GET['target'] == 'output') {
            require('output.php');
        } elseif ($_GET['target'] == 'database') {
            require('database.php');
        } elseif ($_GET['target'] == 'form_update') {
            require('form_update.php');
        } elseif ($_GET['target'] == 'delete') {
            require('delete.php');
        } elseif ($_GET['target'] == 'update') {
            require('update.php');
        } elseif ($_GET['target'] == 'login') {
            require('login.php');
        } elseif ($_GET['target'] == 'terima_login') {
            require('terima_login.php');
        } elseif ($_GET['target'] == 'logout') {
            require('logout.php');
        } elseif ($_GET['target'] == 'ceksession') {
            require('ceksession.php');
        } elseif ($_GET['target'] == 'status_login') {
            require('status_login.php');
        } elseif ($_GET['target'] == 'register') {
            require('register.php');
        } elseif ($_GET['target'] == 'accept_register') {
            require('accept_register.php');
        } else {
            echo "Halaman tidak ditemukan !!";
        }
    } else {
        require_once('home.php');
    }
    ?>
    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="index.php">
                    </a>
                </div>
            </div>
            <?php
            if (isset($_GET['target'])) {
                if ($_GET['target'] == 'input') {
                    require('input.php');
                }
            } else {
                require('index.php');
            }
            ?>
        </div>
    </div>
    </div>

    <?php
    require('database.php');
    $queryselect = "select * from tb_produk, brand where tb_produk.brand=brand.id_brand";
    $hasilselect = mysqli_query($koneksi1, $queryselect);
    $jumlah = mysqli_num_rows($hasilselect);
    echo "Jumlah Produk: $jumlah </br>";
    if ($jumlah) {
        echo "<table border='1'>";
        echo "
        <tr>
        <th>ID Produk</th><th>Nama</th><th>Brand</th><th>Deskripsi</th><th>Stok</th><th>Harga</th><th>Gambar</th><th>Action</th>
        </tr>";
        while ($row = mysqli_fetch_array($hasilselect)) {
            echo "<tr>
                            <td>" . $row['id_produk'] . "</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['brand'] . "</td>
                            <td>" . $row['deskripsi'] . "</td>
                            <td>" . $row['stok'] . "</td>
                            <td>" . $row['harga'] . "</td>
                            <td><img src='img/".$row['gambar']."' width='100' height='100'></td>
                            <td>
                                <a href='form_update.php?target=" . $row['id_produk'] . "'>Edit </a>
                                <a href='delete.php?id_produk=$row[id_produk]'onClick=\"return confirm('Apa anda ingin menghapus produk ini?')\">Hapus </a>
                                <a href='detail.php?id=" . $row['id_produk'] . "'>Lihat Detail</a>
                            </td>
                            </tr>";
        }
    }
    ?>
    <p>
        <div class="col-md-4">
            <div class="input" style="center: 2rem;" action="input.php" method="POST">
                <a class="button" href="index.php?target=input"><button type="submit" class="btn btn-success btn-block" name="input">Tambah Produk</button>
                </a>
    </p>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</body>

</html>