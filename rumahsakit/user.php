<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USER</h1>
</body>
</html>

<?php

session_start();

if(!isset($_SESSION["nama"])){
    header("Location:login.php");
}
echo "<a href='beranda.php'>Ke Beranda User</a>";
echo "<br>";
