<?php 
$title = "String Manipulation";
include 'includes/header.php' ?>
    <h2>String Manipulation</h2>
    <?php
        $phrase1 = "Students who came late ";
        $phrase2 = "in class, stand with rock";
        echo $phrase1;
        echo $phrase2;
        echo $phrase1 . ", named tiffany " . $phrase2;
        echo "</br>";
        $name = "justine troy";
        echo '<hr/>';
        //String Manipulation
        echo 'UpperCase First Letter: ' . ucfirst($name). '</br>';
        echo 'UpperCase First Letter of each word: ' . ucwords($name). '</br>';
        echo 'Uppercase: '. strtoupper($name). '</br>';
        echo 'Lowercase: '. strtolower('CUTE NI TROY'). '</br>';
        echo '<hr/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('ugh ' , 10)). '</br>';
        echo 'Get a Substring: ' . substr($name, 2, 7). '</br>';
        echo 'Get position of String: ' . strpos($name, 'r'). '</br>';
        echo 'Find Character: "y": ' . strchr($name, 's'). '</br>';
        echo 'Find the length of the string: ' . strlen($name). '</br>';

        echo 'without a trim: ' . 'a ' . 'b c d' . ' e'. '</br>';
        echo 'trim spaces on both sides: ' . 'a' . trim(' b c d ') . 'e'. '</br>';
        echo 'trim spaces on left side: ' . 'a' . ltrim(' b c d ') . 'e'. '</br>';
        echo 'trim spaces on right side: ' . 'a' . rtrim(' b c d ') . 'e'. '</br>';
        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2 ). '</br>';
        
    



    ?>
<?php require 'includes/footer.php' ?>