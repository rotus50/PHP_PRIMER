<?php include 'includes/header.php' ?>
<body>
    <h1>PHP Primer - Date and time</h1>

    <?php
        $datenow = getdate();
        echo $datenow['mday'] . ' ' . $datenow['mon'] . ' ' . $datenow['year'];
    ?>
<?php require 'includes/footer.php' ?>