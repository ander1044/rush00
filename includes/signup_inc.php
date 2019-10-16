<?php

include("dbh_inc.php");

if(isset($_POST['signup-submit']))
{
    require 'dbh_inc.php';

    $Firstname = $_POST['name'];
    $Lastname = $_POST['surname'];
    $Email = $_POST['mail'];
    $Emailrepeat = $_POST['re-mail'];
    $Password = $_POST['pass'];
    $Passwordrepeat = $_POST['re-pass'];
    $Number = $_POST['contact'];
    
    if(empty($Firstname) || empty($Lastname) || empty($Email) || empty($Emailrepeat) || empty($Password) 
    || empty($Passwordrepeat) || empty($Number))
    {
        header("Location: ../register.php?error=emptyfileds&name=".$Firstname."&surname=".$Lastname."&mail=".$Email);
        exit();
    }
    else if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../register.php?error=invalidmail&name=".$Firstname);
        exit();
    }
    else if (!preg_match("/^[0-9]*$/", $Number))
    {
        header("Location: ../register.php?error=invalidnumber&name=".$Firstname);
        exit();
    }
    else if ($Email !== $Emailrepeat || $Password !== $Passwordrepeat){
        header("Location: ../register.php?error=checkmailandpass&name=".$Firstname."&surname=".$Lastname);
        exit();
    }
    else 
    {
        $sql = "SELECT firstUsers FROM users WHERE firstUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../register.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s");
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0)
        {
           header("Location: ../register.php?error=usertaken&email".$Email);
            exit();
        }
    else 
    {
        $sql = "INSERT INTO users (firstUsers, lastUsers, emailUsers, passUsers, contactUsers) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn); 
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../register.php?error=sqlerror");
            exit();
        }
    else 
    {
        $hashing = password_hash($Password,PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sssss", $Firstname, $Lastname, $Email, $hashing, $Number);
        mysqli_stmt_execute($stmt);
        header("Location: ../register.php?signup=success");
            exit();
    }

    }
}
}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
    else
    {
        header("Location: ../register.php");
            exit();
    }