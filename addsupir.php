<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengemudi</title>
</head>
<body>
            
    <div class="container"> <!-- class container -->
    <h2>Tambah Data Supir</h2>
        <form action="" class="formcrud" method="POST"><!-- pembuatan class form tambah-->
            <!--menu dalam form tambah-->
            <label class="labelform">NIK</label>
            <input id="inputnik" type="text" class="indataform" name="inputnik" value="">

            <label class="labelform">Nama Pengemudi</label>
            <input id="inputnama" type="text" class="indataform" name="inputnama" value="">

                <!--menu radio button jenis kelamin-->
                <div class="indataradio">
                    <input type="radio" name="inputjk" value="Laki- Laki">Laki- Laki
                    <input type="radio" name="inputjk" value="Perenmpuan">Perempuan
                </div>

            <label class="labelform">Nomor Kontak</label>
            <input id="inputtelp" type="text" class="indataform" name="inputtelp" value="">

            <label class="labelform">Bayaran Pengemudi</label>
            <input id="inputharga" type="text" class="indataform" name="inputharga" value="">

            <!--pembuatan tombol aksi dalam form tambah data-->
                <div class="aksiform">
                     <button type="submit" name="submit" id="submit">Submit Data</button>
                     <a href="supir.php" class="button-aksi" role="button">Batal</a>

                </div>

        </form>

    </div>
</body>
</html>

<!--PHP LOGIC TAMBAH DATA SUPIR -->
<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $inputnik = $_POST['inputnik'];
    $inputnama = $_POST['inputnama'];
    $inputjk = $_POST['inputjk'];
    $inputtelp = $_POST['inputtelp'];
    $inputharga = $_POST['inputharga'];

    $sql = "INSERT INTO pengemudi (nik, nama_pengemudi,jenis_kelamin,nomor_telp,harga) VALUES (:inputnik, :inputnama, :inputjk, :inputtelp, :inputharga)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['inputnik' => $inputnik, 'inputnama' => $inputnama,'inputjk'=>$inputjk,'inputtelp'=>$inputtelp, 'inputharga'=>$inputharga]);

    header("Location: supir.php"); // Redirect after submission
}
?>
