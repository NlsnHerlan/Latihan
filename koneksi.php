<?php

class praktekpdo{
    function getkoneksi(){
        return new PDO("mysql:host=localhost;dbname=praktekpdo",'root','');
    }
}
