	  <!-- Bottom Bar Start -->
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

	                  <!-- <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </li> -->
	              </ul>
	      </nav>
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
	  </body>

	  <?php
        require('database.php');
        session_start();
        $username = $_SESSION["username"];
        $pass = $_SESSION["pass"];
        $queryselect = "select * from user";
        $hasilselect = mysqli_query($koneksi1, $queryselect);
        ?>


	  <head>
	      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  </head>

	  <body>
	      <div class="jumbotron text-center">
	          <h1>Selamat Datang di Halaman Admin</h1>
	          <h4>Halaman ini hanya dapat diakses setelah login</h4>
	          <a href="login.php" class="btn btn-warning" role="button">Logout</a>
	          <a href="index2.php" class="btn btn-warning" role="button">Masuk web</a>
	      </div>

	  </body>

	  </html>