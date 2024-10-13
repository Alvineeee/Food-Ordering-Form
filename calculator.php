<?php
function calculator(){
    echo "Select Operation /n";
    echo "1. Add/n";
    echo "2. Subtract/n";
    echo "3. Multiply/n";
    echo "4. Divide/n";

    $choice = readline("Enter choice(1/2/3/4): ");

    // prompt input from use
    $num1 = readline("Enter  first number: ");
    $num2 = readline("Enter  second number: ");

    if($choice == '1') {
        echo "$num1 + $num2 is ". ($num1 + $num2) . "/n";
    }elseif($choice == '2') {
        echo "$num1 - $num2 is ". ($num1 - $num2) . "/n";
    }elseif($choice == '3') {
        echo "$num1 * $num2 is ". ($num1 * $num2) . "/n";
    }elseif($choice == '4'){
        if($num2 != 0)
        {
            echo "$num1 / $num2 is ". ($num1 / $num2) . "/n";
        }else{
            echo "ERROR!: Division by zero! \n";
        }
        
    }else{
        echo "Invalid Choice";
    }

}

calculator()
?>