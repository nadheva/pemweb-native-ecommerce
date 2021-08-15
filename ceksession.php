

<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <a href="index.php">
                </a>
            </div>
        </div>
        <?php
        session_start();

        if (!isset($_SESSION["username"])) {
            echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
            exit;
        }

        $username = $_SESSION["username"];
        ?>
        <!DOCTYPE html>
        <html>

        <head>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        </head>

        <body>
            <div class="jumbotron text-center">
                <h1>Selamat Datang di Halaman Admin</h1>
                <h4>Halaman ini hanya dapat diakses setelah login</h4>
                <p>Username : <?php echo $username; ?></p>
                <p>Password : <?php echo "-"; ?></p>
                <a href="index.php" class="btn btn-warning" role="button">Logout</a>
                <a href="index2.php" class="btn btn-warning" role="button">Masuk Web</a>
            </div>

        </body>

        </html>