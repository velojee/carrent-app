<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Supir</title>
    <script defer src="js/update.js"></script>
    <link rel="stylesheet" href="css/supir.css">

</head>
<body>
    <div class="tablecontainer">
        <!-- Button Container -->
        <div class="button-main">
            <a class="btn btn-back" href="dashboard.php" role="button">Kembali</a>
            <a class="btn btn-add" href="addsupir.php" role="button">Tambah</a>
        </div>
        <!-- Table Show Case Data -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama Pengemudi</th>
                    <th>Jenis_Kelamin</th>
                    <th>Nomor HP</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Fetching data dari database
            $sql = "SELECT * FROM pengemudi";
            $stmt = $pdo->query($sql);
            while ($row = $stmt->fetch()) {
            ?>
                <tr>
                    <td><?php echo $row['id_pengemudi'];?></td>
                    <td><?php echo $row['nik']; ?></td>
                    <td><?php echo $row['nama_pengemudi']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['nomor_telp']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td>
                        <a class="btn btn-update" href="updatesupir.php?id=<?php echo $row['id_pengemudi'];?>" role="button">Perhabarui</a>
                        <a class="btn btn-update" href="hapussupir.php?id=<?php echo $row['id_pengemudi'];?>" role="button"  onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data');">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>