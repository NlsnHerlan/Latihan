<?php

session_start();


if(isset($_SESSION["nama"])){
    header("Location:beranda.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5" >
<form  style="text-align:center;" action="proseslogin.php" method="POST">
    <h1> Login</h1>
    <div class="container mt-5"  >
        <span>Username:   <input type="text" name="nama" required></span>
        <br>
        <br>
        <span >Password: <input  type="password" name="password" required></span>
</div>
        <br>
        <br>
        <button class="btn btn-outline-primary mb-3" >Login</button>
    </form>
    <style>
        h1{
            color: blue;
        }
    </style>
</div>
</body>
</html>