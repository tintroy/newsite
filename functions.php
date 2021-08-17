<?php
$title = "Functions";
include 'includes/header.php' ?>
    <h2>FUNCTIONS</h2>
    <?php
        //Defining Function
        function writeMessage(){
            echo "cutie pie <br/>";
        }
            //callling a function 
            writeMessage();

            // function with parameters
        function addFunction($num1, $num2){
                $sum = $num1 + $num2;
                echo "the sum of $num1 and $num2 is: $sum <br/>";
        }

        // pass by reference - use ampersand in perimeter
        function changeNum(&$num){
            $num = $num + 10;
            // $num+=10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }


        $num = 500;
        addFunction(9, 9);
        addFunction(4, $num);
        addFunction("4", "50");

        changeNum($num);
        echo $num . "<br/>";

        $return_value = returnProduct(10, 200);
        echo $return_value . "<br/>";
    ?>
<?php require 'includes/footer.php' ?>