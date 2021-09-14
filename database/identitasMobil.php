<?php
	ob_start();
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

	 <div id="logout" style="margin-left: 1200px; margin-top: 20px; "><a href="../login/logout.php" style="padding: 10px; background-color: white; text-decoration: none; color: black; ">Log out</a></div>

	<div class="form-wrapper">
<center>
<h1>Tabel Identitas Mobil</h1>
<table border="1" cellspacing="0" cellpadding="7">
	<thead>
		<tr bgcolor="white" style="color: black">
			<th rowspan="2">No. Identitas</th>
			<th rowspan="2">Nama</th>
			<th rowspan="2">Merk Mobil</th>
			<th rowspan="2">Jenis Layanan</th>
			<th colspan="2">Mulai</th>
			<th colspan="2">Selesai</th>
			<th rowspan="2">Rincian Tujuan</th>
			<th rowspan="2">Keterangan</th>

		<tr bgcolor="white" style="color: black">
			
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
			<td>
				<a style="color: black; padding: 5px; background-color: white; text-decoration: none;" href="ubah.php?identitas=<?=$data['identitas'];?>">Ubah</a>
				<a style="color: white; padding: 5px; background-color: red; text-decoration: none;" onclick="return confirm('Anda Yakin Ingin Menghapus Data');" href="?action=hapus&identitas=<?=$data['identitas'];?>">Hapus</a>
			</td>
			
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
		header("location: ../database/pesanAdminMobil.php");
	}


	if (@$_GET['action'] == "hapus") {
		$where = ['identitas' => $_GET['identitas']];
		$mbl->hapusData($table, $where);
		header("location: ../database/identitasMobil.php");
	}

 ?>