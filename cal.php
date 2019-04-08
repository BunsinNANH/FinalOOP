<?php 
    include "src/functions.php";

    if(isset($_POST['btn-submit'])){
        $firstNumber = $_POST['fNumber'];
        $secondNumber = $_POST['sNumber'];
        $functionName = $_POST['functionName'];

        if($functionName == 'Add' || $functionName == 'add'){
            $result = new Calculate($firstNumber,$secondNumber);
            $result->getFirstNumber();
            $result->getSecondNumber();
            $functionName = $result->add();

            echo "<p><strong>The result is:</strong><span>".$functionName."</span></p>";
        }else if($functionName == 'Minu' || $functionName == 'minus'){
            $result = new Calculate($firstNumber,$secondNumber);
            $functionName = minus();
            $result->getFirstNumber();
            $result->getSecondNumber();
            echo "<p><strong>The result is:</strong><span>".$result->$functionName."</span></p>";
        }else if($functionName == 'Multiply' || $functionName == 'multiply'){
            $result = new Calculate($firstNumber,$secondNumber);
            $functionName = multiply();

            $result->getFirstNumber();
            $result->getSecondNumber();
            echo "<p><strong>The result is:</strong><span>".$result->$functionName."</span></p>";
        }else if($functionName == 'Devide' || $functionName == 'divide'){
            $result = new Calculate($firstNumber,$secondNumber);
            $functionName = divide();
            $result->getFirstNumber();
            $result->getSecondNumber();
            echo "<p><strong>The result is:</strong><span>".$result->$functionName."</span></p>";
        }

    }

?>