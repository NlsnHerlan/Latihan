<?php
    $nis =  $_POST['nis'];
    $nama = htmlentities (trim($_POST['nama']));
    $password = $_POST['password'];
    $kelas = $_POST['kelas'];
    $pesan_error = "";
    
    if(empty($nama)){
        $pesan_error = "Data Tidak Boleh Kosong";
    }

    if($pesan_error == ""){
    $database = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
    $query = $database->query("insert into user values(null,'$nis','$nama','$password','$kelas')");

    if($query){
        header("Location:beranda.php");
    }

}else{
    header("Location:beranda.php?error=$pesan_error");
}