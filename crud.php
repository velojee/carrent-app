<?php
include("connection.php");

// Insert Data dipindah kedalam addsupir
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

// Delete Data dipindah kedalam hapussupir
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM your_table WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    header("Location: supir.php");
}

// Update Data
if (isset($_POST['update'])) {
    //FETCH data dari form update

    $id = $_POST['id'];
    $nik = $_POST['updatenik'];
    $nama_pengemudi= $_POST['updatenama'];
    $jenis_kelamin = $_POST['updatejk'];
    $nomor_telp = $_POST['updatetelp'];
    $harga = $_POST['updateharga'];
 
    $sql = "UPDATE pengemudi SET nik = :nik, nama_pengemudi = :nama_pengemudi, jenis_kelamin = :jenis_kelamin, nomor_telp = :nomor_telp, harga = :harga WHERE id_pengemudi = :id_pengemudi";
    $stmt = $pdo->prepare($sql);

    // Execute the update query
    if ($stmt->execute([
        'nik' => $nik,
        'nama_pengemudi' => $nama_pengemudi,
        'jenis_kelamin' => $jenis_kelamin,
        'nomor_telp' => $nomor_telp,
        'harga' => $harga,
        'id_pengemudi' => $id
    ])) {
        // Redirect back to the main page after the update
        header("Location: supir.php");
        exit();
    } else {
        echo "Failed to update data.";
    }
}