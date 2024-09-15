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

    header("Location: pengguna.php"); // Redirect after submission
}

// Delete Data dipindah kedalam hapussupir
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM your_table WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    header("Location: pengguna.php");
}

// Update Data
if (isset($_POST['update'])) {
    //FETCH data dari form update

    $usernamelogin = $_POST['updateuname'];
    $level_pengguna = $_POST['updatelevel'];
    $nama_pengguna= $_POST['updatenamapengguna'];
    $password = $_POST['updatepassword'];
 
    $sql = "UPDATE pengguna SET level_pengguna = :level_pengguna, nama_pengguna=:nama_pengguna, password = :passwordp WHERE usernamelogin = :usernamelogin";
    $stmt = $pdo->prepare($sql);

    // Execute the update query
    if ($stmt->execute([
        
        'usernamelogin' => $usernamelogin,
        'level_pengguna' => $level_pengguna,
        'nama_pengguna' => $nama_pengguna,
        'passwordp' => $password,
        

    ])) {
        // Redirect back to the main page after the update
        header("Location: pengguna.php");
        exit();
    } else {
        echo "Gagal Melakukan Update Pada Data.";
    }
}