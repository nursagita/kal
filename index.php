<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><input type="text" name="prodi"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="text" name="kelas"></td>
		</tr>
		<tr>
			<td>Data Diri</td>
			<td>:</td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="hasil" value="KIRIM"></td>
		</tr>
	</table>
</form>
<<?php 
	if (isset($_POST["hasil"])) {
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$prodi = $_POST["prodi"];
		$kelas = $_POST["kelas"];

		$file = $_FILES["file"]["name"];
		$tmp_name = $_FILES["file"]["tmp_name"];

		move_uploaded_file($tmp_name, "images/".$file);
	}
 ?>

 <table border="1" cellpadding="0">
 	<tr>
 		<td>Nama</td>
 		<td>Alamat</td>
 		<td>Prodi</td>
 		<td>Kelas</td>
 		<td>Foto</td>
 	</tr>
 	<tr>
 		<td><?php echo $nama ?></td>
 		<td><?php echo $alamat ?></td>
 		<td><?php echo $prodi ?></td>
 		<td><?php echo $kelas ?></td>

 		<td><img src="images/<?php echo $file ?>" style="width: 100px"></td>
 </table>

 <<?php 

  ?>