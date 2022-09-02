<?php

    require_once __DIR__ . '/class/movies.php';

    $movieOne = new Movie ("Encanto", 2021);
    $movieTwo = new Movie ("Big Hero 6", 2014);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP e il cinema</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <head>
            <h1>Films sul grande schermo:</h1>
        </head>

        <main>
            <ul>

                <li>
                    <strong>
                        <?php
                            echo $movieOne -> getTitle();
                        ?>
                    </strong>
                </li>

                <li>
                    <?php
                        echo $movieOne -> getYear();
                    ?>
                </li>

                <li>
                    <strong>
                        <?php
                            echo $movieTwo -> getTitle();
                        ?>
                    </strong>
                </li>

                <li>
                    <?php
                        echo $movieTwo -> getYear();
                    ?>
                </li>
                
            </ul>
        </main>
        
    </body>
</html>