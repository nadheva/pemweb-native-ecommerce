	<?php 
        if(isset($_GET['target']))
        {
        if($_GET['target']=='output') {
        require('output.php');
        }
        }
        else{
        require('index2.php');
        }
    ?>
<div class="container mt-20">
	 	<div class="d-flex justify-content-center">
	 		<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
			  	<div class="card-header text-center">
			  		<h3>
			  			Input Produk
			  		</h3> 
			 	</div>
			  	<div class="card-body">
			    	<!-- <h5 class="card-title">Primary card title</h5> -->
				<form class="bg-primary" style="width: 30rem;" action="output.php" method="post" enctype="multipart/form-data">
					<div class="row mb-3">
			 			<div class="col-4">
			 				<label>ID Produk</label>
			 			</div>
			 			<input class="col-7" type="text" name="id_produk">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Nama Produk</label>
			 			</div>
			 			<input class="col-7" type="text" name="nama_produk">
			 		</div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 			  <label>Brand</label>
			 			</div>
			 			<select class="col-7" name="brand">
								<?php
								require('database.php');
								$queryselect = "select * from brand";
								$hasilselect = mysqli_query($koneksi1, $queryselect);
								while ($row = mysqli_fetch_array($hasilselect)) 
								{
								echo "<option value ='".$row['id_brand']."'>".$row['nama_brand']."</option>";
								}
								?>
			 			</select>
					 </div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Deskripsi Produk</label>
			 			</div>
                         <textarea class="col-7" type="text" name="deskripsi_produk" textarea>

                         </textarea>    
					 </div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 				<label>Stok Produk</label>
			 			</div>
			 			<input class="col-7" type="number" name="stok_produk">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Harga Produk</label>
			 			</div>
			 			<input class="col-7" type="text" name="harga">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Foto</label>
			 			</div>
			 			<input class="col-7" type="file" accept="img/" name="gambar">
                     </div>
					 <a href="index2.php?target=output"></a>
					 
                     <button type="submit" class="btn btn-success btn-block" name="submit" value="upload">Tambahkan</button>
                 </form>
                 
			  </div>
			</div>
	 	</div>
	 </div> */
	 