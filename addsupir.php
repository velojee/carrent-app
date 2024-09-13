<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supir</title>
    <script defer src="js/update.js"></script>
    <link rel="stylesheet" href="css/supir.css"> <!-- Link to the same CSS file -->
</head>
<body>
    <div class="tablecontainer">
        <!-- Button Container -->
        <div class="button-main">
            <a class="btn btn-back" href="supir.php" role="button">Back</a>
            <a class="btn btn-add" href="addsupir.php" role="button">Tambah</a>
        </div>
        <!-- Form to Add New Driver -->
        <form action="submit_driver.php" method="post">
            <label for="nik">NIK:</label>
            <input type="text" id="nik" name="nik" required>

            <label for="nama">Nama Pengemudi:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>

            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" id="nomor_hp" name="nomor_hp" required>

            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" required>

            <button type="submit" class="btn btn-submit">Simpan</button>
        </form>
    </div>
</body>
</html>
