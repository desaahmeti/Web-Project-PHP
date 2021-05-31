<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=portfolio", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection");
}   