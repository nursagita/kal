<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>:Peminjaman</title>
    </head>
    <body>
        <center>
            <h2>Manajemen Peminjaman</h2>
            <a href="create.php">Tambah Peminjam</a>
            <table border="1" width="100%" style="border-collapse:collapse">
                <tr>
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>Kode Buku</td>
                    <td>Tgl Pinjam</td>
                    <td>Action</td>
                </tr>
                <?php
                require_once "../koneksi.php";
                $no = 1;
                $query = $conn->query("SELECT * FROM pinjam_kembali INNER JOIN anggota on(pinjam_kembali.id_anggota=anggota.id_anggota) WHERE status_buku = 'Pinjam'");
                while($res = $query->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $res['nama'] ?></td>
                    <td><?php echo $res['kode_buku'] ?></td>
                    <td><?php echo $res['tgl_pinjam'] ?></td>
                    <td>
                        <a href="../pengembalian/create.php?id=<?php  echo $res['id_pinjam_kembali'] ?>">Pengembalian</a>
                    </td>
                </tr>
            <?php endwhile;?>
            </table>
            <a href="../">Menu Utama</a>
        </center>
    </body>
</html>