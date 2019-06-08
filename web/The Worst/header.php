<?php session_start(); ?>
<div class="jumbotron">
        <h1 class="title">The Worst</h1>
        <div class="menu-flex">
                <ul class="nav nav-tabs">
                        <li><a href="home.php">Home</a></li>
                        <!-- Sectopm -->
                        <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing Sections
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <?php 
                                        // Display the sections. Query from database
                                        foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
                                                echo '<li><a href="section.php?section=' . $clothing['sectionid'] . '">'. $clothing['sectionname'] .'</a></li>';
                                        }
                                        ?>
                                </ul>
                        </li>
                        <!-- Admin control -->
                        <?php
                        // Only show if the user is authorized
                        if (isset($_SESSION["username"]) && $_SESSION["username"] != "")
                        {
                                $statement = $db->prepare('SELECT isadmin FROM worstusers WHERE username=:username;');
                                $statement->bindValue(':username', $_SESSION["username"]);
                                $statement->execute();
                                $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($rows as $row) {
                                        if ($row['isadmin'])
                                        {
                                                echo '<li class="dropdown">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Options
                                                        <span class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                                <li><a href="addProduct.php">Add Product</a></li>
                                                                <li><a href="edit.php">Edit Product</a></li>
                                                        </ul>
                                                </li>';

                                        }   
                                }

                        }
                        ?>
                        <?php
                        // Only show if a user is logged in
                        if (isset($_SESSION["username"]) && $_SESSION["username"] != "")
                        {
                                echo '<li><a href="logout.php">Log Out</a></li>';
                                
                        }
                        else {
                                echo '<li><a href="login.php">Log In</a></li>
                                <li><a href="signup.php">Sign Up</a></li>';

                        }
                        ?>
                </ul>
        </div>
        <div class="welcome">
        <?php
        if (isset($_SESSION["username"]) && $_SESSION["username"] != "")
        {
                echo '<p class="welcomeMessage">Welcome, ' . $_SESSION["username"] . '.</p>';
                
        }
        ?>
        </div>
</div>

