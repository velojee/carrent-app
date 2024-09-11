<?php
include 'connection.php';

if(isset( $_POST['username'] ) && isset( $_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username) || empty($password)){
    header('Location: index.php?error=isi semua data');
    exit();
    }else{
        $stmt= $conn->prepare('SELECT * FROM pengguna WHERE usernamelogin = ?');
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $result=$stmt->get_result();

        if ($result->num_rows == 1) {
            $fetchdata = $result->fetch_assoc();           
            if ($password === $fetchdata['password']) {
                // redirect kedalam dashboard
                $_SESSION['username'] = $fetchdata['username'];
                header('Location: dashboard.php');
                exit();
            }else {
                // password yang dimasukan tidak sesuai
                header('Location: index.php?error= password yang anda masukan salah');
                exit();
            }
        }else {
            // username tidak ditemukan
            header('Location: index.php?error= user tidak ditemukan');
            exit();
        } 
    }
}
$stmt->close();
$conn->close();