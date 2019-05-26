<div class="jumbotron">
        <h1 class="title">The Worst</h1>
        <div class="menu-flex">
                <ul class="nav nav-tabs">
                        <li><a href="home.php">Home</a></li>
                        <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing Sections
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                        <?php 
                                        // Display the sections. Query from database
                                        foreach ($db->query('SELECT sectionname, sectionid  FROM clothingsection') as $clothing) {
                                                echo '<li><a href="section.php?section=' . $clothing['sectionid'] . '"/a>'. $clothing['sectionname'] .'</li>';
                                        }
                                        ?>
                                </ul>
                        </li>
                </ul>
        </div>
</div>

