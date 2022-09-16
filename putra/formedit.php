<?php
$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=pdo",'root','');
$query = $koneksi->query("select * from siswa where id='$id'");

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
            <input type="text" name="nama" value='<?php echo $data['nama']?>'>
        </div>
        <br>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
            <option value="10 RPL">10 RPL</option>
            <option value="11 RPL">11 RPL</option>
            <option value="12 RPL">12 RPL</option>
            </select>
           
        </div>
        <br>
        <div>
            <input type="hidden" name="id" value='<?php echo $data['id']?>'>
        </div>
        <input type="submit" value="simpan">
    </form>
    </body>
</html>

