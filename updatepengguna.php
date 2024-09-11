<?php
include 'connection.php';

// Check if the `id_pengemudi` is set in the URL to fetch the data
if (isset($_GET['id'])) {
    $usernamelogin = $_GET['id'];

    // Fetch the current data of the selected row
    $sql = "SELECT * FROM pengguna WHERE usernamelogin = :usernamelogin";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['usernamelogin' => $usernamelogin]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // If the row doesn't exist, redirect back
    if (!$row) {
        echo "Data Tidak Ditemukan!";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna Sistem</title>
</head>
<body>
            
    <div class="container"> <!-- class container -->
    <h2>Edit Data Pengguna Sistem</h2>
        <form action="crudpengguna.php" class="formcrud" method="POST"><!-- pembuatan class form tambah-->
            <!--menu dalam form tambah-->
            <label class="labelform">Login Username</label>
            <input id="updateuname" type="text" class="indataform" name="updateuname" value="<?php echo $row["usernamelogin"];?>">

                <!--menu radio button jenis kelamin-->
                <div class="indataradio">
                    <input type="radio" name="updatelevel" value="admin">admin
                    <input type="radio" name="updatelevel" value="operator">operator
                </div>

            <label class="labelform">Nomor Pemilik Akun</label>
            <input id="updatenamapengguna" type="text" class="indataform" name="updatenamapengguna" value="<?php echo $row["nama_pengguna"];?>">

            <label class="labelform">Kata Sandi Login</label>
            <input id="updatepassword" type="text" class="indataform" name="updatepassword" value="<?php echo $row["password"];?>">

            <!--pembuatan tombol aksi dalam form tambah data-->
                <div class="aksiform">
                     <button type="submit" name="update" id="update">Perbahari Data</button>
                     <a href="pengguna.php" class="button-aksi" role="button">Batal</a>

                </div>

        </form>

    </div>
</body>
</html>