<?php
include 'connection.php';

// Check if the `id_pengemudi` is set in the URL to fetch the data
if (isset($_GET['id'])) {
    $id_pengemudi = $_GET['id'];

    // Fetch the current data of the selected row
    $sql = "SELECT * FROM pengemudi WHERE id_pengemudi = :id_pengemudi";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_pengemudi' => $id_pengemudi]);
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
    <title>Edit Pengemudi</title>
    <link rel="stylesheet" href="css/supir.css">
</head>
<body>
    <div class="container"> <!-- class container -->
        <h2>Edit Data Supir</h2>
        <form action="crud.php" class="formcrud" method="POST"><!-- pembuatan class form tambah-->
            <!--menu dalam form tambah-->
            <input type="hidden" name="id" id="id" value="<?php echo $row["id_pengemudi"];?>">
            <label class="labelform">NIK</label>
            <input id="updatenik" type="text" class="indataform" name="updatenik" value="<?php echo $row["nik"];?>">

            <label class="labelform">Nama Pengemudi</label>
            <input id="updatenama" type="text" class="indataform" name="updatenama" value="<?php echo $row["nama_pengemudi"];?>">

            <label class="labelform">Jenis Kelamin</label>
            <select id="updatejk" name="updatejk" class="indataform" required>
                <option value="Laki- Laki" <?php echo ($row["jenis_kelamin"] == 'Laki- Laki') ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?php echo ($row["jenis_kelamin"] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
            </select>

            <label class="labelform">Nomor Kontak</label>
            <input id="updatetelp" type="text" class="indataform" name="updatetelp" value="<?php echo $row["nomor_telp"];?>">

            <label class="labelform">Bayaran Pengemudi</label>
            <input id="updateharga" type="text" class="indataform" name="updateharga" value="<?php echo $row["harga"];?>">

            <!--pembuatan tombol aksi dalam form tambah data-->
            <div class="aksiform">
                <button type="submit" name="update" id="update">Perbahari Data</button>
                <a href="supir.php" class="button-aksi" role="button">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
