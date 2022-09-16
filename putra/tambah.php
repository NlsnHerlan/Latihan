<?php

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("insert into siswa values(null,'$nama','$kelas')");

    if($query){
        header("Location:index.php");
    }
