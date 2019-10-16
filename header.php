<?php
session_start();
echo 
'<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" />
    <title>Skateboard World</title>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="row">
                    <div class="menu">
                        <div class="logo">
                            <p><span class="icon">SK</span><a class="link" href="index.php">Skateboard World</a></p>
                        </div>
                        <ul>
                            <li><a class="link" href="index.php">Home</a></li>
                            <li><a class="link" href="shop.php">Shop</a></li>
                            <!--<li>Services
                                        <ul>
                                            <li>Cloud Services</li>
                                            <li>Domain Registation</li>
                                            <li>Graphics and Development</li>
                                        </ul>-->
                            </li>
                            <li class="sign-up"><a class="link" href="register.php">Sign Up</a></li>
                            <li class="sign-up"><a class="link" href="login.php">Sign In</a></li>
                            <li class="sign-up"><a class="link" href="cart.php">Cart</a></li>
                            <!--<li class="sign-up"><a class="link" href="login.php">Sign Out</a></li>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>';
    ?>