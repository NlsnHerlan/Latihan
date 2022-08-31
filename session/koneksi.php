<?php

class data{
    function getkoneksi(){
        echo "Ini Koneksi";
        return new PDO("mysql:host=localhost;dbname=data",'root','');
    }
}