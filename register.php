<?php
require "header.php";
?>
<main>
    <h1>Register</h1>
<form method="POST" action="includes/signup.inc.php">
                        <input type="text" name="name" placeholder="First Name">
                        <input type="text" name="surname" placeholder="Last Name">
                        <input type="text" name="mail" placeholder="Email">
                        <input type="text" name="re-mail" placeholder="Confirm Email">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="password" name="re-pass" placeholder="Confirm Password">
                        <input type="text" name="contact" placeholder="Mobile / Phone Number">
                        <button type="submit" name="signup-submit">sign up</button>
                    </form>
</main>
<?php
require "footer.php";
?>