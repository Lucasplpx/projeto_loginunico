<?php

try{

$url = "mysql:dbname=projeto_loginunico;host=localhost";
$user = "root";
$pass = "";

$pdo = new PDO($url, $user, $pass);


}catch(PDOException $e){
    echo "Erro : ". $e->getMessage();
    exit;
}
?>