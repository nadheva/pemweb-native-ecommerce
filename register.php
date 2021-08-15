<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
		</div>
	</div>
</div>
<div class="container mt-20">
	 	<div class="d-flex justify-content-center">
	 		<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
			  	<div class="card-header text-center">
			  		<h3>
			  			Register
			  		</h3> 
			 	</div>
			  	<div class="card-body">
			    	<!-- <h5 class="card-title">Primary card title</h5> -->
			    <form class="bg-primary" style="width: 30rem;" action="index4.php?target=accept_register" method="post" enctype="multipart/form-data">
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Username</label>
			 			</div>
			 			<input class="col-7" type="text" name="username" required>
			 		</div>
					<!--
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Alamat</label>
			 			</div>
			 			<input class="col-7" type="text" name="alamat">
			 		</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Email</label>
			 			</div>
			 			<input class="col-7" type="email" name="email">
			 		</div>
					-->
					<div class="row mb-3">
						<div class="col-4">
							<label>Sebagai</label>
						</div>
						<select name="sebagai" aria-placeholder="Silahkan Pilih" class="col-7" required>
							<option value="admin">Admin</option>
							<option value="pemasok">Pemasok</option>
						</select>
					</div>
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Password</label>
			 			</div>
			 			<input class="col-7" type="password" name="password" required>
			 		</div>
					<div class="row mb-3">
			 			<div class="col-4">
			 				<label> Konf. Password</label>
			 			</div>
			 			<input class="col-7" type="password" name="password2" required>
			 		</div>
					<!--
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Foto</label>
			 			</div>
			 			<input type="hidden" name="MAX_FILE-SIZE" value="40000">
			 			<input class="col-7" type="file" accept="data/png" name="foto">
			 		</div>
					
			 		<a href="index.php?target=accept_register"></a>
					-->
			 		<button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
			 		
			 	</form>
			  </div>
			</div>
	 	</div>
	 </div>