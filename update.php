<?php 
$database = new PDO('mysql:host=localhost;dbname=latihan','root','');
$query=$database->query("update siswa set nama='putra' where id='1' ");