<?php
session_start();

if(!isset($_SESSION['Usuario'])){
    header('Location: login/index.php?erro=true');
    exit;
}
?>