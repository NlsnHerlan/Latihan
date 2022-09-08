<?php

    $id = $_GET['id'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("delete from user where id='$id'");

    
    if($query){
        header("Location:index.php");
    }