<?php

$con = mysqli_connect("localhost", "root", "", "biblioteca-tcc");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

?>