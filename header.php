<html>
    <head>
        <title>GreenGuysDelivery</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <nav>
                <img src="https://dcassetcdn.com/design_img/1080373/498969/498969_5824307_1080373_image.jpg" alt=logo>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Customer service</a></li>
                </ul>
                <div>
                    <form method="POST" action="login.inc.php">
                        <input type="text" name="user" placeholder="Username or Email">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="submit" value="signin">
                    </form>
                    <a href="register.php">Signup</a>
                    <form action="logout.inc.php" method="POST">
                        <button type="submit" name="logout">signout</button>
                    </form>

                </div>
                </nav>
        </header>
    </body>
</html>