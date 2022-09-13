<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $id = $_POST['id'];

    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("update user set username='$username',password='$password',role='$role 'where id='$id'");

    
    if($query){
        header("Location:beranda.php");
    }