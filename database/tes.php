<?php
	require_once "mobil.php";
	$mbl = new Mobil();
	$table = "mobil";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Identitas Penyewa</title>
	<link rel="stylesheet" type="text/css" href="identitasPenyewa1.css">
</head>
<body>

	<div class="form-wrapper">
<center>
<h1>Tabel Identitas Mobil</h1>
<table border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr bgcolor="cyan">
			<th rowspan="2">No. Identitas</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Merk Mobil</th>
			<th rowspan="2">Jenis Layanan</th>
			<th colspan="2">Mulai</th>
			<th colspan="2">Selesai</th>
			<th rowspan="2">Rincian Tujuan</th>
		<tr bgcolor="cyan">
			
			<th>Tanggal</th>
			<th>Jam</th>
			<th>Tanggal</th>
			<th>Jam</th>
			
		</tr>
		</tr>
	</thead>

	<tbody>
		<?php
			$row = $mbl->tampilData($table);
			foreach ($row as $data) {
		?>
		<tr>
			<td><?=$data['identitas'];?></td>
			<td><?=$data['nama'];?></td>
			<td><?=$data['merk'];?></td>
			<td><?=$data['layanan'];?></td>
			<td><?=$data['tgl_mulai'];?></td>
			<td><?=$data['jam_mulai'];?></td>
			<td><?=$data['tgl_selesai'];?></td>
			<td><?=$data['jam_selesai'];?></td>
			<td><?=$data['tujuan'];?></td>
			
		</tr>
		<?php } ?>
	</tbody>

</table>
</center>

<br>

<center>
	<form method="POST" action="">
		<input type="submit" name="kembali" value="Kembali">
		<input type="submit" name="tambah" value="Tambah Data">
		
	</form>
	
</center>

  	</div>






</body>
</html>

<?php
	if(isset($_POST['kembali'])){
		header("location: ../login/home.php");
	}

	if(isset($_POST['tambah'])){
		header("location: ../database/pesanAdmin.php");
	}

 ?>