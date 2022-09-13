<?php
$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $koneksi->query("select * from user where id='$id'");

$data=$query->fetch();

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
    <h1>EDIT DATA</h1>
    <form action="edit.php" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" value='<?php echo $data['username']?>'>
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="text" name="password" value='<?php echo $data['password']?>'>
        </div>
        <br>
        <div>
            <label>Role</label>
            <input type="text" name="role" value='<?php echo $data['role']?>'>
        </div>
        <div>
            <input type="hidden" name="id" value='<?php echo $data['id']?>'>
        </div>
        <input type="submit" value="simpan">
    </form>
    </body>
</html>

<?php

session_start();

if(!isset($_SESSION["username"])){
    header("Location:login.php");
}
?>