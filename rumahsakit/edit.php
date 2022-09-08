<?php

    $username = $_GET['username'];
    $password = $_POST['password'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("update user set nama='$username' where password='$password'");

    
    if($query){
        header("Location:index.php");
    }