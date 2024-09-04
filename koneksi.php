<?php

//koneksi database
$host='localhost';
$user='root';
$pass= '';
$dbname='carrent-app';

//tes koneksi database
$conn=new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error) {
    die('gagal membuat koneksi'. $con->connect_error);
}
