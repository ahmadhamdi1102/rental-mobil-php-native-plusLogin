<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="home1.css">
</head>
<body>
	
<div class="form-wrapper"> 

   <h3 style="margin-top: 35px; margin-left: 20px;  font-size: 30px;">Selamat Datang <?php echo $row['nama']; ?> , Selamat Berselancar</h3>
    
    <div class="menu" style="margin-top: -15px; float: right; margin-right: 20px; ">
    <a href="../database/identitasPenyewa.php" style="padding: 10px; background-color: grey; text-decoration: none; color: white;">Identitas Penyewa</a>
     <a href="../database/identitasMobil.php" style="padding: 10px 30px; background-color: grey; text-decoration: none; color: white">Identitas Mobil</a>
     <a href="logout.php" style="padding: 10px; background-color: grey; text-decoration: none; color: white; right: 0px;">Log out</a>
 	</div>

    
</div>

</body>
</html>