<?php 
$title = "If Statements";
include 'includes/header.php' ?>
    <h2>IF STATEMENT</h2>
    <?php
        // an if statement will carry out an action based on the value of the variable.

        echo "<h1>If Statement</h1>";

        $grade = 50;
        // ===, ==, >, <, <=, >=   COMPARISON
        if($grade >= 50) {
            echo '<h3 style="color: green"> You have passed!</h3>';
        }
        else {
            echo '<h3  style="color: red">You have failed!</h3>';
        }

        $grades = 'B';
        // if else
        // && and, || or, 
        if($grades == 'A'){
            echo '<h3style="color: grenn">you are a superstar!</h3>';
        }
        elseif($grades == 'B'){
            echo '<h3 style="color: blue">you are a did well!</h3>';
        }
        else {
            echo '<h3  style="color: red">You have failed!</h3>';
        }

    ?>
<?php require 'includes/footer.php' ?>