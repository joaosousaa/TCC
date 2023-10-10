<?php

$con = mysqli_connect("localhost", "root", "", "biblioteca-tcc");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "biblioteca-tcc";
$port = 3306;

try {
    
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    
} catch (PDOException $err) {
    die("Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage());
}





?>