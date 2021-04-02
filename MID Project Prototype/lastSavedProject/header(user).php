<!-- Header(user) starts -->
<?php
    session_start();
?>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="styles/basicLayout.css">
    </head>
    <body>
        <header class="header">
            <ul class="plain-bullet">
                <?php
                    if(!isset($_SESSION["user"]))
                    {
                        include_once "loggedOutButton.php";
                    }
                    else
                    {
                        include_once "loggedInButton.php";
                    }
                ?>
                <li><a href="homepage(common).php" class="left">HOME</a></li>
                <li>
                    <form method="post">
                    <input type="text" placeholder="Serach.." class=""><!-- --><button class="button">Search</button>
                    </form>
                </li>
            </ul>
        </header>
        <div class="topnav" align="center">
            <ul class="plain-bullet">
                <li><a href="#">LAPTOP</a></li>
                <li><a href="#">DESKTOP</a></li>
                <li><a href="#">ALL IN ONE</a></li>
                <li><a href="#">MONITOR</a></li>
                <li><a href="#">SERVER</a></li>
                <li><a href="#">WORKSTATION</a></li>
                <li><a href="#">PRINTERS</a></li>
                <li><a href="#">PHOTOCOPIER</a></li>
                <li><a href="#">ACCESSORIES</a></li>
                
            </ul>
        </div>
        <!-- Header(user) starts -->

