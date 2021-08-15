<?php 
    if(isset($_GET['target']))
    {
    if($_GET['target']=='produk') {
    require('produk.php');
    }
    }
    else{
    require('index.php');
    }
    ?>
    <?php
    //panggil file koneksi.php yang sudah anda buat
    include "database.php";
    
    $id=$_GET['id'];   //ambil parameter GET id  dan buat variabel
    //gunakan parameter get untuk menghapus data berdasarkan id produk
    $hapus = mysqli_query($conect, "DELETE FROM tb_produk where id_produk='$id'");
    if($hapus){ //jika berhasil
        echo "<script>alert('Data Berhasil Di Hapus');document.location='produk.php'</script>";
    }else{  //jika gagal
        echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='produk.php'</script>";
    }
    ?>