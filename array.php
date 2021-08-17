<?php 
$title = "Array";
include 'includes/header.php' ?>
    <h1>ARRAYS</h1>
    <?php
        // a variable
        $num = 3;

        // an array, one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,34,54,36,87,97);
        echo "<p>$numbers[4]</p>";

        $size = count($numbers);
        echo "<p>The size of the array is: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }

        
    ?>
<?php require 'includes/footer.php' ?>