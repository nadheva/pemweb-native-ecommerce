<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "database.php";
?>
<?php
//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_array(mysqli_query($koneksi1, "SELECT * FROM tb_produk where id_produk='$_GET[id]'"));

//buat variabel dari setiap field name form produk
$nama= mysqli_real_escape_string($koneksi1, $_POST['nama']);    //varibel field nama
$stok= mysqli_real_escape_string($koneksi1, $_POST['stok']);    //varibel field stok
$deskripsi= mysqli_real_escape_string($koneksi1, $_POST['deskripsi']);  //varibel field deskripsi
$harga= mysqli_real_escape_string($koneksi1, $_POST['harga']);        //varibel field harga

if(isset($_POST['simpan'])){
 if(empty($nama)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Nama Produk</p>";
    }
    elseif(empty($deskripsi)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Deskripsi Produk</p>";
    }
    elseif(strlen($deskripsi) < 10){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Deskripsi Produk minimal 10 karakter</p>";
    }
    elseif(empty($stok)){   //jika Stok kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Stok Produk</p>";
    }
    elseif(!is_numeric($stok)){   //jika Stok Bukan angka maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Jumlah Stok Dengan Angka</p>";
    }
    elseif(empty($harga)){ //jika harga kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Harga Produk</p>";
    }
    elseif(!is_numeric($harga)){  //jika harga bukan angka maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan Harga Produk Dengan Angka</p>";
    }
    else{  //jika semua sudah terpenuhi maka update ke tb_produk

    $save=mysqli_query($koneksi1, "UPDATE tb_produk set nama_produk='$nama',stok_produk='$stok',deskripsi_produk='$deskripsi',harga_produk='$harga' where id_produk='$_GET[id]'");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='produk.php'</script>";
    }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='input.php'</script>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table border="0" cellspacing="10" width="800" align="center">
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>Nama Produk</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Nama Produk" size="50" maxlength="30" autocomplete="off" autofocus value="<?php echo $b['nama_produk'];?>"/>
        </td>
    </tr>
    <tr>
        <td>Deskripsi Produk</td>
        <td>:</td>
        <td><textarea name="deskripsi" placeholder="Deskrippsi Produk" rows="3" cols="50"/><?php echo $b['deskripsi_produk'];?></textarea></td>
    </tr>
    <tr>
        <td>Stok Produk</td>
        <td>:</td>
        <td><input type="text" name="stok" placeholder="Stok Produk" size="20" maxlength="10" value="<?php echo $b['stok_produk'];?>"/></td>
    </tr>
    <tr>
        <td>Berat Produk</td>
        <td>:</td>
        <td><input type="text" name="berat" placeholder="Berat Produk" size="30" maxlength="30" value="<?php echo $b['berat_produk'];?>"/></td>
    </tr>
    <tr>
        <td>Harga Produk</td>
        <td>:</td>
        <td><input type="text" name="harga" placeholder="Harga Produk" size="30" maxlength="30" value="<?php echo $b['harga_produk'];?>"/></td>
    </tr>
    <tr>
        <td colspan="3"><button type="submit" name="simpan">Proses Data</button</td>
    </tr>
</tbody>

</table>
</form>

</body>
</html>