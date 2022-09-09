<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("update user set username='$username' where password='$password'");

    
    if($query){
        header("Location:beranda.php");
    }