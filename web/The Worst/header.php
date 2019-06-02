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
                        <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing Sections
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <li><a href="addProduct.php">Add Product</a></li>
                                        <li><a href="edit.php"></a>Edit Product</li>
                                </ul>
                        </li>
                        <!-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Options
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="addProduct.php">Add Product</a></li>
                                <li><a href="edit.php"></a>Edit Product</li>
                                </ul>
                        </li> -->
                </ul>
        </div>
</div>

