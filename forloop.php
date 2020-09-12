<?php include 'includes/header.php' ?>
    <h1>For Loops</h1>

    <?php

        for($count = 0; $count <10; $count++) {
            echo "<p>kurwo jebana</p>";
        }

        for($count = 0; $count <10; $count++) {
            echo "<p>$count</p>";
        }
    ?>

    <?php

    $dolar = 0;
    do{
        echo "<p>kurwo jebana</p>";
        $dolar = $dolar +2;
    } while($dolar <10)
    ?>

    <?php
    $pizda = array(1,2,3,4,5,6,7);
    
    $smiec = $pizda[3];
    echo "<p>$smiec</p>"
    ?>

<?php require 'includes/footer.php' ?>