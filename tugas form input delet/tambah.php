<?php

    $nama = $_POST['nama'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("insert into siswa values(null,'$nama')");

    if($query){
        header("Location:index.php");
    }

