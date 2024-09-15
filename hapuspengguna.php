<?php
include ("connection.php");

// Check if the `id_pengemudi` is set in the URL
if (isset($_GET['id'])) {
    $usernamelogin = $_GET['id'];

    // Prepare and execute the delete statement
    $sql = "DELETE FROM pengguna WHERE usernamelogin = :usernamelogin";
    $stmt = $pdo->prepare($sql);

    // Bind the parameter and execute
    if ($stmt->execute(['usernamelogin' => $usernamelogin])) {
        // If successful, redirect back to the main page
        header("Location: pengguna.php");
        exit();
    } else {
        echo "Gagal Menghapus Data.";
    }
} else {
    // If `id_pengemudi` is not set, redirect to the main page
    header("Location: pengguna.php");
    exit();
}
?>