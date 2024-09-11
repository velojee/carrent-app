<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengemudi</title>
</head>
<body>
            
    <div class="container"> <!-- class container -->
    <h2>Tambah Data Pengguna</h2>
        <form action="" class="formcrud" method="POST"><!-- pembuatan class form tambah-->
            <!--menu dalam form tambah-->
            <label class="labelform">Id Pengguna</label>
            <input id="inputid" type="text" class="indataform" name="inputid" value="">

                <!--menu radio button jenis kelamin-->
                <div class="indataradio">
                    <input type="radio" name="inputjenis_pengguna" value="admin">admin
                    <input type="radio" name="inputjenis_pengguna" value="operator">operator
                </div>

            <label class="labelform">Nama Pengguna</label>
            <input id="inputnama_pengguna" type="text" class="indataform" name="inputnama_pengguna" value="">

            <label class="labelform">Password</label>
            <input id="inputpassword" type="text" class="indataform" name="inputpassword" value="">

            <!--pembuatan tombol aksi dalam form tambah data-->
                <div class="aksiform">
                     <button type="submit" name="submit" id="submit">Submit Data</button>
                     <a href="pengguna.php" class="button-aksi" role="button">Batal</a>

                </div>

        </form>

    </div>
</body>
</html>

<!--PHP LOGIC TAMBAH DATA SUPIR -->
<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $id = $_POST['inputid'];
    $jenis_pengguna = $_POST['inputjenis_pengguna'];
    $nama_pengguna = $_POST['inputnama_pengguna'];
    $password = $_POST['inputpassword'];

    $sql = "INSERT INTO pengguna (usernamelogin, level_pengguna, nama_pengguna, password) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id, $jenis_pengguna, $nama_pengguna, $password]);
    

    header("Location: pengguna.php"); // Redirect after submission&/
}
?>
