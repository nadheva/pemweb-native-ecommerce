<?php
require('database.php');
// menyimpan data id kedalam variabel
$id_produk   = $_GET['id_produk'];
// query SQL untuk insert data
$query="DELETE from tb_produk where id_produk='$id_produk'";
mysqli_query($koneksi1, $query);
// mengalihkan ke halaman index.php
header("location:index2.php?target=produk");
?>