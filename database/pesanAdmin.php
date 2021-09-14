<?php
	require_once "mobil.php";
	$mbl = new Mobil();
	$table = "mobil";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Identitas Penyewa</title>
	<link rel="stylesheet" type="text/css" href="pesanAdmin1.css">
</head>
<body>

	<div class="form-wrapper">
<center>
			<h3>Tambah Data</h3>
			<form method="POST" action="">
				
				<fieldset style="width: 70%">
					<legend><h3 style="color: white; text-shadow: none;">Identitas Penyewa</h3></legend>
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
					<legend><h3 style="color: white; ">Identitas Mobil</h3></legend>
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
							<input type="text" name="tgl_mulai" id="tgl_mulai" placeholder="dd/mm/yyyy"> Jam :
						<td>
							<input type="text" name="jam_mulai" id="jam_mulai" placeholder="hh:mm">
						</td>
					</tr>
					<tr>
						<td>Tanggal Selesai</td>
						<td>:</td>
						<td>
							<input type="text" name="tgl_selesai" id="tgl_selesai" placeholder="dd/mm/yyyy"> Jam :
						<td>
							<input type="text" name="jam_selesai" id="jam_selesai" placeholder="hh:mm">
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
							<input type="submit" name="kembali" value="Batal">
							<input type="reset" name="reset" value="Hapus">
							<input type="submit" name="submit" value="Simpan">
						</td>
					</tr>
				</table>

	</form>
				</center>

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

		echo "<script>alert('Data berhasil di tambah');</script>";
		header('location: ../database/identitasPenyewa.php');
	}

	if(isset($_POST['kembali'])){
		header("location: ../database/identitasPenyewa.php");
	}
?>	