<div class="jumbotron">
        <h1 class="title">The Worst</h1>
        <ul class="nav nav-tabs">
                <li class="active"><a href="home.php">Home</a></li>
                <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing Sections
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                                <?php 
                                // Display the sections. Query from database
                                $stmt = $db->prepare('SELECT * FROM clothingsection');
                                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                             
                             
                                foreach ($rows as $scripture) {
                                        echo "<li><a href=\"http://\"></a>". $rows['sectionname'] ."</li>";
                                //    echo "<b><a href=\"ta05.php?id=" . $scripture['id'] . "\">" . $scripture['book'] . " " . $scripture['chapter'] . ": " . $scripture['verse'] . "</b></a>";
                                //    echo '<br/>';
                                }
                                ?>
                                <!-- <li><a href="#">Shirts</a></li>
                                <li><a href="#">Submenu 1-2</a></li>
                                <li><a href="#">Submenu 1-3</a></li>  -->
                        </ul>
                 </li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
        </ul>
</div>

