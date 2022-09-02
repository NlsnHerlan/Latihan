<?php

session_start();

if(!isset($_SESSION["username"])){
    header("Location:form.php");
}
echo "<br>";
echo "<a href='session.php'>kembali</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center;">Ini Beranda</h1>
</body>
</html>
