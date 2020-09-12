<?php include 'includes/header.php' ?>
    <h1>Switch statements</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2>YOU ARE SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2>YOU ARE OLD</h2>';
                break;
            default:
                echo '<h2>YOU HAVE FAILED</h2>';
                break; 
            }
    ?>
<?php require 'includes/footer.php' ?>