<?php include 'includes/header.php' ?>
    <?php
        $phrase1 = "dupa pizda szmata";
        $phrase2 = "ehh kurwa";
        echo $phrase1 . " " . $phrase2;
    ?>

<?php
        $phrase4 = "CIPPPA";
        echo strtolower($phrase4);
        echo '<hr/>';
        echo ($phrase4);
        echo '<hr/>';
        echo strtolower(str_repeat($phrase4 . "<br/>",10));
        echo '<hr/>';
        echo 'Get a substring ' . substr($phrase4, 0, 2). "<br/>";
        echo '<hr/>';
        echo strchr($phrase4, 'I'). "<br/>";
    ?>
<?php require 'includes/footer.php' ?>