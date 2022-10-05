<?php
$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
$query = $koneksi->query("select * from user where id='$id'");

$data=$query->fetch();
echo "<a  href='beranda.php'>Kembali</a>"   
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
    <br>
    <h1>EDIT DATA</h1>
    <form action="edit.php" method="post">
        <div>
            <label>Nis: </label>
            <input type="text" name="nis" value="<?php echo $data['nis']?>" required>
        </div>
        <br>
        <div>
            <label>Nama: </label>
            <input type="text" name="nama" value="<?php echo $data['nama']?>" required>
        </div>
        <br>
        <div>
            <label>Password: </label>
            <input type="text" name="password" value="<?php echo $data['password']?>" required>
        </div>
        <br>
        <div>
            <label>Kelas: </label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']?>" required>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
        </div>
        <input type="submit" value="simpan" class="btn btn-outline-primary mb-3" >    
    </form>
    </body>
</html>

