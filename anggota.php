<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ceter>
		<table width="700" border="1">
			<tr>
				<td colspan="2" align="center"><h1>sistem informasi perpustakaan</h1>
				</td>
			</tr>
			<td width="200">
			<ul>
			<li><a href="anggota.php">Angota</a></li>
			<li><a href="buku.php">Buku</a></li>
			<li><a href="pinjam.php">Pinjam</a></li>
			<ul>

			</td>
			<td width="500">
				<a href="input_anggota.php">Input anggota></a>
				<table border="1">
														<thead>
							<tr>
						 	<th >No</th>
						 	<th >id_anggota</th>
						 	<th >alamat</th>
						 	<th >TTL</th>
						 	<th >status</th>
						 	<th >Aksi</th>
						 </tr>
						 <tbody>
						 	<?php
include = "koneksi.php";
$query ="select * from anggota order by id_anggota";
$sql = mysql_query($query);
$no = 1;
?>
 <tr class="odd gradeX">
 	<td><?php echo $no></td>
						 </tbody>

	</thead>
</body>
</html>