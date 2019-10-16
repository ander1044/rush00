<?php
if (isset($_POST['login-submit']))
{
    require 'dbh.inc.php';

    $Email = $_POST['email'];
    $Password = $_POST['pass'];

if(empty($Email) || empty($Password))
    {
        header("Location : ../admin-index.php?error=emptyfileds");
        exit();
    }
    else
    {
            $sql = "SELECT * FROM users WHERE  emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location : ../admin-index.php?error=sqlerror");
        exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $Email, $Email);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($res))
        {
            $runPass = password_verify($Password, $row['passUsers']);
        }
        if ($runPass == FALSE)
        {
            header("Location : ../admin-index.php?error=wrongpass");
            exit();
        }
        else if ($runPass == TRUE)
        {
            session_start();
            $_SESSION['userId'] = $row['idUsers'];
            $_SESSION['user'] = $row['firstUsers'];
            header("Location : ../admin-index.php?login=success");
            exit();
            
        }
        else 
        {
            header("Location : ../admin-index.php?error=wrongpass");
            exit();
        }
    }
    } 
    }
else
{
    header("Location : ../admin-index.php");
        exit();
}