      

      <div class="bottom-bar">
      	<div class="container-fluid">
      		<div class="row align-items-center">
      			<div class="col-md-3">
      				<a href="index.php">
      				</a>
      			</div>
      		</div>
      		<?php
				if (isset($_GET['target'])) {
					if ($_GET['target'] == 'terima_login') {
						require('terima_login.php');
					}
				} else {
					require('index.php');
				}
				?>
      	</div>
      </div>
      </div>
      <div class="container mt-20">
      	<div class="d-flex justify-content-center">
      		<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
      			<div class="card-header text-center">
      				<h3>
      					LOGIN
      				</h3>
      			</div>
      			<div class="card-body">
      				<!-- <h5 class="card-title">Primary card title</h5> -->
      				<form class="bg-primary" style="width: 30rem;" action="terima_login.php" method="GET">
      					<div class="row mb-3">
      						<div class="col-4">
      							<label>Username</label>
      						</div>
      						<input class="col-7" type="text" name="username" placeholder="Masukkan Username" required>
      					</div>
      					<div class="row mb-3">
      						<div class="col-4">
      							<label>Password</label>
      						</div>
      						<input class="col-7" type="password" name="pass" placeholder="Masukkan Password" required>
      					</div>
      					<div class="row mb-3">
      						<div class="col-4">
      							<label>Sebagai</label>
      						</div>
      						<select name="sebagai" class="col-7" aria-placeholder="Silahkan Pilih" required>
      							<option value="admin">Admin</option>
      							<option value="guest">Pembeli</option>
      						</select>
      					</div>

      					<a href="index4.php?target=terima_login"></a>

      					<button type="submit" class="btn btn-success btn-block" name="login" value="LOGIN">Login</button><br>
      					<div>
						Belum daftar?
						<a href="index4.php?target=register" class="text-warning font-weight-bold">Register</a>
						</div>
      				</form>
      			</div>
      		</div>
      	</div>
      </div>