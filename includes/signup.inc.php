<?php
if(isset($_POST['signup-submit'])){
    require 'dbh.inc.php';

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
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        header("Location : ../register.php?error=invalidmail&name=".$Firstname);
        exit();
    }
    elseif (!preg_match("/^[0-9]*$/", $Number)){
        header("Location : ../register.php?error=invalidnumber&name=".$Firstname);
        exit();
    }
    elseif ($Email !== $Emailrepeat || $Password !== $Passwordrepeat){
        header("Location : ../register.php?error=checkmailandpass&name=".$Firstname."&surname=".$Lastname);
        exit();
    }
}