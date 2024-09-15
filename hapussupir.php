<?php
include ("connection.php");

// Check if the `id_pengemudi` is set in the URL
if (isset($_GET['id'])) {
    $id_pengemudi = $_GET['id'];

    // Prepare and execute the delete statement
    $sql = "DELETE FROM pengemudi WHERE id_pengemudi = :id_pengemudi";
    $stmt = $pdo->prepare($sql);

    // Bind the parameter and execute
    if ($stmt->execute(['id_pengemudi' => $id_pengemudi])) {
        // If successful, redirect back to the main page
        header("Location: supir.php");
        exit();
    } else {
        echo "Gagal Menghapus Data.";
    }
} else {
    // If `id_pengemudi` is not set, redirect to the main page
    header("Location: supir.php");
    exit();
}
?>