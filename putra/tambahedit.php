<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>INPUT DATA</h1>
    <form action="tambah.php" method="post">
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
            <option value="10 RPL">10 RPL</option>
            <option value="11 RPL">11 RPL</option>
            <option value="12 RPL">12 RPL</option>
            </select>
           
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>