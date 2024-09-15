<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pengguna</title>
    <script defer src="js/update.js"></script>
    <link rel="stylesheet" href="css/pengguna.css">
</head>
<body>
    <div class="tablecontainer">
        <!-- Button Container -->
        <div class="button-main">
        <a class="btn btn-back" href="dashboard.php" role="button">Kembali</a>
        <a class="btn btn-add" href="addpengguna.php" role="button">Tambah</a>
        </div>
        <!-- Table Show Case Data -->
        <table>
            <thead>
                <tr>
                    <th>ID Pengguna</th>
                    <th>Jenis Pengguna</th>
                    <th>Nama Pengguna</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetching data from the database
                $sql = "SELECT * FROM pengguna";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['usernamelogin'];?></td>
                    <td><?php echo $row['level_pengguna']; ?></td>
                    <td><?php echo $row['nama_pengguna']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <a class="btn btn-update" href="updatepengguna.php?id=<?php echo $row['usernamelogin'];?>" role="button">Perbaharui</a>
                        <a class="btn btn-update" href="hapuspengguna.php?id=<?php echo $row['usernamelogin'];?>" role="button" onclick="return confirm('Apakah Anda Yakin Untuk Menghapus Data');">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
