<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3 style="text-align: center">Login</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					
					$_SESSION['user_id']=$row['user_id'];
					
					echo "<script>alert('Login berhasil');</script>";
					header('location:home.php');

				}
			else
				{
					echo '<script>alert("Username atau Password Salah");</script>';
				}
		}
  ?>
 <!--  <div class="reminder">
    <p style="width: 300px; height: 30px; background-color: #00b6df; color: black; font-size: 15px; padding-top: 10px;">Belum menjadi anggota? <a href="../pesan.php">Daftar Sekarang</a></p>
    <!-- <p><a href="#">Forgot password?</a></p> -->
  </div> -->
  
</div>

</body>
</html> 