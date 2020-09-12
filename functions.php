<?php include 'includes/header.php' ?>
    <h1>Functions</h1>
    <?php


        function writeMessage(){
            echo "chuj w dupe" . "<br/>";
        }
        writeMessage();

        echo "<hr/>";

        writeMessage();

        function Adder($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum";
        }

        Adder(9, 22);


    ?>
<?php require 'includes/footer.php' ?>