<?php
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];
    $id = $_POST['id'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("update user set nama='$nama',password='$password',kelas='$kelas', nis='$nis' where id='$id'");

    
    if($query){
        header("Location:beranda.php");
    }