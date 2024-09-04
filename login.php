<?php
include 'koneksi.php';

$unamekosong=null;
$passwordkosong=null;
$validasigagal=null;
$uname=null;   
$psword=null;

/*
/*post form masuk*/
if(isset($_POST['masuk'])){

    /*fetch data form login*/
    $uname=$_POST['username'];
    $psword=$_POST['password'];

    if(empty($uname)||empty($psword)){
        $validasigagal= 'Tolong isi username dan password';
    }else{
        $stmt= $conn->prepare('SELECT * FROM pengguna WHERE id_pengguna = ? AND password = ?');
        $stmt->bind_param('ss',$uname, $psword);

        $stmt->execute();
        $result=$stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirect to dashboard
            header("Location: dashboard.html");
            exit();
        } else {
            $validasigagal = 'Incorrect username or password.';
        }
    }
    $stmt->close();
    $conn->close();
    /*
    $stmt= $conn->prepare('SELECT * FROM pengguna WHERE id_pengguna = ? AND password = ?');
    $stmt->bind_param('ss',$uname, $psword);

    $stmt->execute();
    $result=$stmt->get_result();

    if($result->num_rows > 0){
        header('Location: dashboard.html');
    }else{
        $validasigagal='username atau password yang anda masukan salah';
    }

    $stmt->close();
    $conn->close();*/

}