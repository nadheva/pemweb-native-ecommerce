<!DOCTYPE html>
<html>

<head>
	<title>@Ponselku_Store</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="eCommerce HTML Template Free Download" name="keywords">
	<meta content="eCommerce HTML Template Free Download" name="description">

	<!-- Favicon -->
	<link href="phone.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

	<!-- CSS Libraries -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="lib/slick/slick.css" rel="stylesheet">
	<link href="lib/slick/slick-theme.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
	<link href="background.css" rel="stylesheet">
	<link href="table.css" rel="stylesheet">
</head>

<body>
	<!-- Top bar Start -->
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<i class="fa fa-envelope"></i>
					nadheva17@student.uns.ac.id
				</div>
				<div class="col-sm-6">
					<i class="fa fa-phone"></i>
					+6285-735-691-018
				</div>
			</div>
		</div>
	</div>

	<!-- Top bar End -->


	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<a class="navbar-brand" href="#">
			<!-- <img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0"> -->
			<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
			<!-- <img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0">
	  	<img src="https://fontmeme.com/permalink/201213/61b01ea4c965609688bad051421911a0.png" alt="comic-fonts" border="0"> -->
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				
				<!-- <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </li> -->
			</ul>
		
		</div>
	</nav>
<?php 
        if(isset($_GET['target']))
        {
        if($_GET['target']=='output') {
        require('output.php');
        }
        }
        else{
        require('index.php');
        }
?>
        <?php
		require('database.php');
		$target=$_GET['target'];
		$query="SELECT * FROM tb_produk WHERE id_produk='$target'";
		$hasil=mysqli_query($koneksi1,$query);
        ?>

      <div class="bottom-bar">
      	<div class="container-fluid">
      		<div class="row align-items-center">
      			<div class="col-md-3">
      				<a href="index.php">
      				</a>
      			</div>
      		</div>

<div class="container mt-20">
	 	<div class="d-flex justify-content-center">
	 		<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
			  	<div class="card-header text-center">
			  		<h3>
			  			Edit Produk
                      </h3> 
			 	</div>
			  	<div class="card-body">
			    	<!-- <h5 class="card-title">Primary card title</h5> -->
				<form class="bg-primary" style="width: 30rem;" action="update.php" method="POST" enctype="multipart/form-data">
                <?php while($row=mysqli_fetch_array($hasil)) {?>
					<div class="row mb-3">
			 			<div class="col-4">
			 				<label>ID Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="id_produk" value="<?php echo $row['id_produk'] ?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Nama Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="nama_produk" value="<?php echo $row['nama'] ?> ">
			 		</div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 			  <label>Brand</label>
			 			</div>
			 			<select class="col-7"  name="brand">
								<?php
								require('database.php');
								$queryselect = "select * from brand";
								$hasilselect = mysqli_query($koneksi1, $queryselect);
								while ($row2 = mysqli_fetch_array($hasilselect)) 
								{
								if($row2['id_brand']==$row2['brand']) {
									$cetak="selected";
								}
								else{
									$cetak="";
								}
								echo "<option value ='".$row2['id_brand']."'>".$row2['nama_brand']."</option>";
								}
								?>
			 			</select>
					 </div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Deskripsi Produk</label>
			 			</div>
                         <textarea class="col-7" type="text"  name="deskripsi_produk" value="<?php echo $row['deskripsi']?> " textarea>

                         </textarea>    
					 </div>
					 <div class="row mb-3">
			 			<div class="col-4">
			 				<label>Stok Produk</label>
			 			</div>
			 			<input class="col-7" type="number"  name="stok_produk" value="<?php echo $row['stok']?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Harga Produk</label>
			 			</div>
			 			<input class="col-7" type="text"  name="harga_produk" value="<?php echo $row['harga']?> ">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Foto</label>
			 			</div>
			 			<input class="col-7" type="file" accept="img/" name="gambar">
                     </div>
					 <a href="index.php?target=update"></a>
					 
					 <button type="submit" class="btn btn-success btn-block" name="submit" value="upload" >Simpan Perubahan</button><br>
					 <div>
						Kembali
						<a href="index2.php?target=produk" class="text-warning font-weight-bold">Produk Saya</a>
						</div>
				 </form>
				<?php } ?>
			  </div>
			</div>
	 	</div>
     </div>
</body>
</html>