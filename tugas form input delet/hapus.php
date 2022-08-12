<?php

    $id = $_GET['id'];

    $database = new PDO("mysql:host=localhost;dbname=pdo",'root','');
    $query = $database->query("delete from siswa where id='$id'");

    
    if($query){
        header("Location:index.php");
    }

