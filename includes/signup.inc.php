<?php
if(isset($_POST['signup-submit'])){
    require 'databasehandler.php';

    $Firstname = $_POST['name'];
    $Lastname = $_POST['surname'];
    $Email = $_POST['mail'];
    $Emailrepeat = $_POST['re-mail'];
    $Password = $_POST['pass'];
    $Passwordrepeat = $_POST['re-pass'];
    $Number = $_POST['contact'];
    
    if(empty($Firstname) || empty($Firstname) || empty($Firstname) || empty($Firstname) || empty($Firstname) 
    || empty($Firstname) || empty($Firstname)){
        header("Location : ../register.php?error=emptyfileds&name=".$Firstname."&surname=".$Lastname."&mail=".$Email);
        exit();
    }
}