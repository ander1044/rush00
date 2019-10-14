<html>
    <?php
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header("Location: login.php");
}
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
        $_SESSION['logged_in'] = true;
        header("Location: login.php");
    }
}
?>

    <head>
        <title>login</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
            <div class="form">
        <form method="POST" action="login.php">
            Username:<br/>
            <input type="text" name="username"><br>
            Password:<br/>
            <input type="password" name="password"><br/>
            <input type="submit" value="login">
        </form>
        </div>
    </body>
</html>
