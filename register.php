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
                    <h1 class="register-header">-Sign Up-</h1>
                    <div class="reg-form">
                        <form method="POST" action="includes/signup.inc.php">
                            <input type="text" name="name" placeholder="First Name"><br/><br/>
                            <input type="text" name="surname" placeholder="Last Name"><br/><br/>
                            <input type="text" name="mail" placeholder="Email"><br/><br/>
                            <input type="text" name="re-mail" placeholder="Confirm Email"><br/><br/>
                            <input type="password" name="pass" placeholder="Password"><br/><br/>
                            <input type="password" name="re-pass" placeholder="Confirm Password"><br/><br/>
                            <input type="text" name="contact" placeholder="Mobile / Phone Number"><br/><br/>
                            <button class ="primary-button" type="submit" name="signup-submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
</main>
<?php
    require "footer.php";
?>