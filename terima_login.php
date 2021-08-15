<?php
?>

<?php
session_start();
$username = $_GET['username'];
$pass = $_GET['pass'];
$sebagai = $_GET['sebagai'];
require('database.php');
$queryselect = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
$hasilselect = mysqli_query($koneksi1, $queryselect);
$data = mysqli_fetch_array($hasilselect);

if ($data) {
    if ($pass == $data['pass']) {
        $_SESSION['username'] = $username;
        header("Location:index4.php?target=ceksession");
    } else {
        Header("Location: index4.php?target=login");
    }
} else {

    Header("Location: index4.php?target=login");
}
?>
<p><a href="user.php?target=ceksession">Cek Session</a></p>
<p><a href="index.php?target=logout">Log out</a></p>