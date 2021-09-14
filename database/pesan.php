<?php
	ob_start();
	require_once "mobil.php";
	$mbl = new Mobil();
	$table = "mobil";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
	<link rel="stylesheet" type="text/css" href="pesan1.css">
</head>
<body>
<div id="batas">

<!-- untuk header -->

	<header id="header">
		<h1>Cianjur Rental Persada</h1>
		<h2>
		Untuk agan/sista yang hobi travelling, tapi gak punya kendaraan gak usah khawatir.<br>
		Agan/Sista bisa sewa kendaraan di Website ini<br>
		Yuk Kepo-inn.</h2></header>

<!-- untuk menu -->

	<nav id="menu">
		<ul>
			<li><a href="../beranda.php"><strong><em>Home</em></strong></a></li>
			<li><a href="../infomobil.php"><strong><em>Info Mobil</em></strong></a></li>
			<li><a href="../syarat.php"><strong><em>Syarat dan Ketentuan</em></strong></a></li>
			<li><a href="database/pesan.php"><strong><em>Pesan</em></strong></a></li>

		</ul>
	</nav>

<!-- untuk isi -->

	<section id="isi">
		
		<div id="tulisan">
			<center>
			<h1>Silahkan untuk mengisi formulir Penyewaan Mobil yang telah kami sediakan:<br><br></h1>

			<form method="POST" action="">
				
				<fieldset style="width: 70%">
					<legend><h3 style="color: black; text-shadow: none;">Identitas Penyewa</h3></legend>
					<table cellpadding="5">
					

					<tr>
						<td>No KTP/SIM/Passport</td>
						<td>:</td>
						<td>
							<input type="text" name="identitas" >
						</td>
					</tr>

					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>
							<input type="text" name="nama" >
						</td>
					</tr>


					<tr>
						<td>Email</td>
						<td>:</td>
						<td>
							<input type="text" name="email" >
						</td>
					</tr>

					<!-- <tr>
						<td>Password</td>
						<td>:</td>
						<td>
							<input type="password" name="password" id="password">
						</td>
					</tr> -->

					<tr>
						<td>No. HP/WA/Telp.</td>
						<td>:</td>
						<td>
							<input type="text" name="kontak">
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>
							<textarea name="alamat"></textarea>
						</td>
					</tr>

					</table>
				</fieldset>

				<fieldset style="width: 70%">
					<legend><h3 style="color: black; text-shadow: none;">Identitas Mobil</h3></legend>
					<table>
					<tr>
						<td>Merk Mobil</td>
						<td>:</td>
						<td>
							<select name="merk">
								<option>-Pilih-</option>
								<option value="TOYOTA AVANZA">TOYOTA AVANZA</option>
								<option value="TOYOTA CAMRY">TOYOTA CAMRY</option>
								<option value="HONDA MOBILIO">HONDA MOBILIO</option>
								<option value="DAIHATSU XENIA">DAIHATSU XENIA</option>
								<option value="DAIHATSU GRAN MAX">DAIHATSU GRAN MAX</option>
								<option value="GRAND LIVINA">GRAND LIVINA</option>
								<option value="SUZUKI APV">SUZUKI APV</option>
								
							</select>
						</td>
					</tr>

					<tr>
						<td name="layanan">Jenis Layanan</td>
						<td>:</td>
						<td>
							<input type="radio" name="layanan" id="supir" value="Supir Perusahaan">Supir Perusahaan
							<input type="radio" name="layanan" id="tsupir" value="Tanpa Supir">Tanpa Supir
						</td>
					</tr>
					<tr>
						<td>Tanggal Mulai</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_mulai" id="tgl_mulai" placeholder="dd/mm/yyyy"> Jam :
						<td>
							<input type="time" name="jam_mulai" id="jam_mulai" placeholder="hh:mm">
						</td>
					</tr>
					<tr>
						<td>Tanggal Selesai</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_selesai" id="tgl_selesai" placeholder="dd/mm/yyyy"> Jam :
						<td>
							<input type="time" name="jam_selesai" id="jam_selesai" placeholder="hh:mm">
						</td>
					</tr>
						<td>Rincian Tujuan & Keterangan tambahan</td>
						<td>:</td>
						<td>
							<textarea name="tujuan"></textarea>
						</td>
					</tr>

					</table>
				</fieldset>
				<table>
					<tr>
						<td>
							<input type="reset" name="reset" value="Hapus">
							<input type="submit" name="submit" value="Simpan">
						</td>
					</tr>
				</table>

	</form>
				</center>

		</div>
		
		
	</section>

	<div id="side">
			<p style="font-size: 20px; margin-top: 10px;"><strong>Kategori</strong></p>

		
			<ol style="margin-left: 20px;" type="square">
					<li><a href="../toyota.php"><strong><em>Toyota</em></strong></a></li>
					<li><a href="../daihatsu.php"><strong><em>Daihatsu</em></strong></a></li>
					<li><a href="../honda.php"><strong><em>Honda</em></strong></a></li>
					<li><a href="../suzuki.php"><strong><em>Suzuki</em></strong></a></li>


			</ol>

			
		

		<div id="keatas"></div>

		</div>

<!-- untuk footer -->

	<footer id="footer">
		<h1>Cianjur Rental Persada</h1>
		<p>Hotline: 083817209146 || Email: kelompok1@imk.com</p>
		<p>Jl. Pasirgede Raya, Kel. Bojong Herang, Cianjur Jawa Barat</p>
		
	</footer>

</div>

<script src="jquery.min.js"></script>
<script type="text/javascript" src="keatas.js"></script>

</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$identitas = $_POST['identitas'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$kontak = $_POST['kontak'];
		$alamat = $_POST['alamat'];
		$merk = $_POST['merk'];
		$layanan = $_POST['layanan'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$jam_mulai = $_POST['jam_mulai'];
		$tgl_selesai = $_POST['tgl_selesai'];
		$jam_selesai = $_POST['jam_selesai'];
		$tujuan = $_POST['tujuan'];


		$data = array('identitas' => $identitas, 'nama' => $nama, 'email' => $email, 'kontak' => $kontak, 'alamat' =>$alamat, 'merk'=> $merk, 'layanan'=> $layanan, 'tgl_mulai'=> $tgl_mulai, 'jam_mulai'=>$jam_mulai, 'tgl_selesai'=>$tgl_selesai, 'jam_selesai'=> $jam_selesai, 'tujuan'=>$tujuan);

		$mbl->tambahData($table, $data);

		echo "<script> alert('Data berhasil Disimpan');</script>";

		header('location: pesan.php');
	}
?>	