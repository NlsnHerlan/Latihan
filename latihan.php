 <?php
 $id = $_GET['id'];
 $nama = $_GET['nama'];
 $kelas = $_GET['kelas'];

 $database = new PDO('mysql:host=localhost;dbname=latihan','root','');
$query=$database->query("insert into siswa values ($id,'$nama','$kelas')");



