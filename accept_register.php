<?php
		
		require('database.php');
		$username = $_POST['username'];
		//$alamat = $_POST['alamat'];
		//$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$level = $_POST['sebagai'];
		//$tipe = $_FILES['foto']['type'];
		//$tmpFiles = $_FILES['foto']['tmp_name'];
		
		//$tipe = explode('/', $tipe);
		//$tipe = end($tipe);
		//$foto = uniqid().'.'.$tipe;//nama gambar
		
		//move_uploaded_file($tmpFiles, 'data/gambar/anggota/'.$foto);
		
		$queryselect = "SELECT username FROM user WHERE username = '$username'";
		$hasilselect = mysqli_query($koneksi1, $queryselect);
		if(mysqli_num_rows($hasilselect) != 1){
			if($password == $password2){
				//$password = password_hash($password, PASSWORD_DEFAULT);
				$queryinput = "INSERT INTO user VALUES ('$username', '$password', '$level')";
				$hasilinput = mysqli_query($koneksi1, $queryinput);
				if($hasilinput){
					echo "
						<div class='alert alert-success' role='alert'>
						  Registrasi berhasil, silahkan klik <a href='index4.php?target=login' class='alert-link'>Login</a>.
						</div>
					";
					// header("Location: index.php");
					exit;
				}else{
					echo"
					<div class='alert alert-danger text-center' role='alert'>
						".mysqli_error($koneksi1)."
					</div>
					";
				}
				
			}else{
				$error = "Konfirmasi password anda salah";
			}
		}else{
			echo"
				<div class='alert alert-danger text-center' role='alert'>
					Username sudah digunakan, registrasi gagal. <a href='index4.php?target=register' class='alert-link'>Sign Up</a>.
				</div>
			";
		}
	
?>