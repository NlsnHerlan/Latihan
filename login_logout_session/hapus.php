<?php

session_start();

session_destroy();

echo "<br>";
echo "<a href='form.php'>Kembali Ke Form</a>";
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
    <h1 style="text-align: center;">Anda telah logout</h1>
</body>
</html>