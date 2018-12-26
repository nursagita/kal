<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<a href="index.php"> Halama Awal</a>
		<br/>

		<from action="add.php" method="post" name="form1">
			<table widht ="25%" border"0"></table>
			<tr>
				<td>NPM</td>
				<td><input type="number" name="Npm" required></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="add"></td>
			</tr>
		</from>

		<?php
		if (isset($_POST['submit'])){
			$NPM = $POST['Npm'];
			$nama = $POST['nama'];

			include "koneksi.php";

			$result = mysqli_query($mysqli, " INSERT INTO my_table(Npm,nama) VALUES('$NPM,$nama')");

			echo "sukses menambahkan data"
		}
		?>
</table>
</body>
</html>