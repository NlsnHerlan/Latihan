<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("insert into user values(null,'$username','$password','$role')");

    if($query){
        header("Location:beranda.php");
    }