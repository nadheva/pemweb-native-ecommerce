<?php
    if(isset($_GET['target']))
    {
    if($_GET['target']=='home') {
    require('home.php');
    }
    if($_GET['target']=='login') {
    require('login.php');
    }
    if($_GET['target']=='ceksession') {
        require('ceksession.php');
    }
    if($_GET['target']=='logout') {
        require('logout.php');
    }
    }
    else{
    require('index.php');
     }
?>
<?php
require('database.php');
$queryselect = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
$hasilselect = mysqli_query($koneksi1, $queryselect);
$data = mysqli_fetch_array($hasilselect);
echo "Username: $username</br>";
echo "Login Sebagai: $sebagai</br>";
?>
<p><a href="index.php?target=ceksession">Cek Session</a></p>
<p><a href="index.php?target=logout">Log out</a></p>
