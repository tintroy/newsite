<?php 
$title = "For Loop";
include 'includes/header.php' ?>
    <h1>For Loop</h1>

    <?php
        // For Loops
        for($count = 0; $count < 10; $count++){
            echo "<p>Hello World</p>";
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php' ?>