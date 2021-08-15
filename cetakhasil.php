
<?php 
if(isset($_GET['target']))
{
if($_GET['target']=='input') {
require('input.php');
}
if($_GET['target']=='form_update') {
    require('form_update.php');
}
}
else{
require('index2.php');
}?>

<?php
require('ceksession.php');
require('database.php');
$queryselect = "select * from tb_produk, brand where tb_produk.brand=brand.id_brand";
$hasilselect = mysqli_query($koneksi1,$queryselect);
$jumlah = mysqli_num_rows($hasilselect);
echo "Jumlah Produk: $jumlah </br>";
if($jumlah){
    echo "<table border='1'>";
    echo "
    <tr>
    <th>ID Produk</th><th>Nama</th><th>ID Brand</th><th>Brand</th><th>Deskripsi</th><th>Stok</th><th>Harga</th><th>Gambar</th><th>Action</th>
    </tr>";
    while ($row = mysqli_fetch_array($hasilselect)) {
        echo "<tr>
        <td>".$row['id_produk']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['brand']."</td>
        <td>".$row['nama_brand']."</td>
        <td>".$row['deskripsi']."</td>
        <td>".$row['stok']."</td>
        <td>".$row['harga']."</td>
        <td><img src='img/".$row['gambar']."' width='100' height='100'></td>
        <td><a href='form_edit.php?target=".$row['id_produk']."'>Edit</a>
            <a href='delete.php?id_produk=$row[id_produk]'>Delete</a>
        </td>
        </tr>";
    }
}     
header("location:index2.php?target=produk");
?>
<p><a href="index2.php?target=input">Input Produk</a></p>