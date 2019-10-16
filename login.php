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
<?php
    require "header.php";
?>
<main>
        <section class="minijumbo">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
        </section>
        <section class="register-class">
            <div class="container">
                <div class="row">
                    <h1 class="register-header">-Sign In-</h1>
                    <div class="reg-form">
                        <form method="POST" action="login.php">
                            <input type="text" name="username" placeholder="Username"><br><br/>
                            <input type="password" name="password" placeholder="Password"><br/><br/>
                            <button class ="primary-button" type="submit" name="signup-submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</main>
<?php
    require "footer.php";
?>
</body>

</html>