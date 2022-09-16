<?php
 
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $id = $_POST['id'];
    

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("update siswa set nama='$nama',kelas='$kelas' where id='$id'");

    
    if($query){
        header("Location:index.php");
    }