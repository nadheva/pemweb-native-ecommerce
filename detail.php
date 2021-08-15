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
//select.php  
 $output = '';
 require('database.php');
 $target=$_GET['target'];
 $query="SELECT * FROM tb_produk WHERE id_produk='$target'";
 $hasil=mysqli_query($koneksi1,$query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($hasil))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Nama Produk: </label></td>  
            <td width="70%">'.$row["nama"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Brand: </label></td>  
            <td width="70%">'.$row["brand"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Deskripsi: </label></td>  
            <td width="70%">'.$row["deskripsi"].'</td>  
        </tr>
       
        <tr>  
            <td width="30%"><label>Jumlah Stok: </label></td>  
            <td width="70%">'.$row["stok"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Harga: </label></td>  
            <td width="70%">'.$row["harga"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Gambar: </label></td>  
            <td width="70%"><img src="img/'.$row["gambar"].'" width="100" height="100"></td>  
        </tr>

     ';
    }
    $output .= '</table></div>';
    echo $output;
?>
<a href="index2.php?target=produk">Kembali Ke Produk</a>
