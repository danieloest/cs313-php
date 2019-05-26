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
                                echo "In php";
                                foreach ($db->query('SELECT sectionname password FROM clothingsection') as $row)
                                {
                                        echo "In loop!";
                                        echo "<li><a href=\"http://\"></a>". $row['sectionname'] ."</li>";
                                        echo "<h2>!!!</h2>";
                                }



                                // $stmt = $db->prepare('SELECT * FROM clothingsection');
                                // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                             
                             
                                // foreach ($rows as $scripture) {
                                //         echo "<li><a href=\"http://\"></a>". $rows['sectionname'] ."</li>";
                                // //    echo "<b><a href=\"ta05.php?id=" . $scripture['id'] . "\">" . $scripture['book'] . " " . $scripture['chapter'] . ": " . $scripture['verse'] . "</b></a>";
                                // //    echo '<br/>';
                                // }
                                ?>
                        </ul>
                 </li>
        </ul>
</div>

