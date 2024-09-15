<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="css/supir.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Pengguna</h2>
        <form action="" class="formcrud" method="POST">
            <!-- Form Fields -->
            <label for="inputid" class="labelform">ID Pengguna</label>
            <input id="inputid" type="text" class="indataform" name="inputid" required>

            <label for="inputjenis_pengguna" class="labelform">Jenis Pengguna</label>
            <select id="inputjenis_pengguna" name="inputjenis_pengguna" class="indataform" required>
                <option value="" disabled selected>-- Pilih Jenis Pengguna --</option>
                <option value="admin">Admin</option>
                <option value="operator">Operator</option>
            </select>

            <label for="inputnama_pengguna" class="labelform">Nama Pengguna</label>
            <input id="inputnama_pengguna" type="text" class="indataform" name="inputnama_pengguna" required>

            <label for="inputpassword" class="labelform">Password</label>
            <input id="inputpassword" type="password" class="indataform" name="inputpassword" required>

            <!-- Form Actions -->
            <div class="aksiform">
                <button type="submit" name="submit" id="submit">Submit Data</button>
                <a href="pengguna.php" class="button-aksi" role="button">Batal</a>
            </div>
        </form>
    </div>

    <!-- PHP Logic -->
    <?php
    if (isset($_POST['submit'])) {
        $id = $_POST['inputid'];
        $jenis_pengguna = $_POST['inputjenis_pengguna'];
        $nama_pengguna = $_POST['inputnama_pengguna'];
        $password = $_POST['inputpassword'];

        $sql = "INSERT INTO pengguna (usernamelogin, level_pengguna, nama_pengguna, password) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id, $jenis_pengguna, $nama_pengguna, $password]);

        header("Location: pengguna.php"); // Redirect after submission
    }
    ?>
</body>
</html>
