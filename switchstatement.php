<?php 
$title = "Switch Statements";
include 'includes/header.php' ?>
    <h1>Switch statements</h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">you are a superstar!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">you did well!</h2>';
                break;
            default:
                echo '<h2 style="color: red">you have failed!</h2>';
        }

    ?>
<?php require 'includes/footer.php' ?>