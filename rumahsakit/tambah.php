<?php

    $nama = $_POST['nama'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("insert into user values(null,'$username')");

    if($query){
        header("Location:index.php");
    }