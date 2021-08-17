    <?php
        $title = "Index";
        include 'includes/header.php' 
     
     ?>
    <!-- Basic HTML -->
    <h1>Hello HTML</h1>
    <br>

    <!-- Basic PHP -->
    <?php 
        echo "Hello php";
        echo "<br/>";
        echo "second line";
        echo "<br/>";
  
        // Declare Variable
        $name = "Justine Troy";
        $age = 20;

        // Echo Variable
        echo $name;
        echo '<h1>My name is: '.$name.'</h1>';
        echo '<h1>My age is: '.$age.'</h1>';

        echo "<h1>My name is: $name </h1>";
        echo '<button type="button" class="btn btn-dark">Click me</button>';
     require 'includes/footer.php'; 
     
     ?>
    