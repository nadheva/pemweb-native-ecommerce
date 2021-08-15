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
</body>
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
            if ($_GET['target'] == 'terima_login') {
                require('terima_login.php');
            }
        } else {
            require('index.php');
        }
        ?>
    </div>
</div>
</div>
<div class="container mt-20">
    <div class="d-flex justify-content-center">
        <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
            <div class="card-header text-center">
                <h3>
                    LOGIN
                </h3>
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title">Primary card title</h5> -->
                <form class="bg-primary" style="width: 30rem;" action="terima_login.php" method="GET">
                    <div class="row mb-3">
                        <div class="col-4">
                            <label>Username</label>
                        </div>
                        <input class="col-7" type="text" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label>Password</label>
                        </div>
                        <input class="col-7" type="password" name="pass" placeholder="Masukkan Password">
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label>Sebagai</label>
                        </div>
                        <select name="sebagai" aria-placeholder="Silahkan Pilih">
                            <option value="admin">Admin</option>
                            <option value="pemasok">Pemasok</option>
                        </select>
                    </div>

                    <a href="index.php?target=terima_login"></a>

                    <button type="submit" class="btn btn-success btn-block" name="login" value="LOGIN">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

</html>