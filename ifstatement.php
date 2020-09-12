<?php 
$title = "jebanie psa";
include 'includes/header.php' 
?>
    <h1>If statements</h1>
    <?php 
    
    
        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 50) {
            echo '<h3 style="color:red">You have passed</h3>';
        }
        else{
            echo '<h3 style="color:red">You have failed</h3>';
        }

        $pizda = "A";

        if($pizda == 'A') {
            echo '<h3 style="color:red">haha</h3>';
        }
    ?>
<?php require 'includes/footer.php' ?>