<?php 
 if(isset($_GET['target']))
     {
     if($_GET['target']=='produk') {
     require('produk.php');
     }
     }
     else{
     require('index2.php');
     }
?>
<?php 
    $id = $_POST['id_produk'];
    $nama = $_POST['nama_produk'];
    $brand = $_POST['brand'];
	$deskripsi = $_POST['deskripsi_produk'];
	$stok = $_POST['stok_produk'];
    $harga = $_POST['harga_produk'];  
    $gambar = $_FILES['gambar']['name'];
    $tmpFiles = $_FILES['gambar']['tmp_name'];
    
    move_uploaded_file($tmpFiles, 'img/'.$gambar); 

 echo "ID Produk: $id </br>";
 echo "Nama Produk: $nama </br>";
 echo "Brand: $brand </br>";
 echo "Deskripsi Produk: $deskripsi </br>";
 echo "Jumlah Stok: $stok </br>" ;
 echo "Harga: $harga </br>";
 echo "Gambar: $gambar </br>";
 require('database.php');
 $queryinput = "INSERT INTO tb_produk (id_produk,nama,brand,deskripsi,stok,harga,gambar)
 VALUES ('$id','$nama','$brand','$deskripsi','$stok','$harga','$gambar')";
 $hasilqueryinput = mysqli_query($koneksi1, $queryinput);
 if($hasilqueryinput=1) {
     echo "Input Berhasil! </br>";
 } else {
     echo "Input Gagal! </br>";
 }
 header("location:index2.php?target=cetakhasil");
 ?>
 <a href="index2.php?target=produk">Hasil Input Produk</a>
 