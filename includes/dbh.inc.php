<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "197419ander";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Connection failed : ".mysqli_connect_error());
}