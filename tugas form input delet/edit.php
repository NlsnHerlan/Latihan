<?php

    $id = $_GET['id'];
    $nama = $_POST['nama'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("update siswa set nama='$nama' where id='$id'");

    
    if($query){
        header("Location:index.php");
    }

