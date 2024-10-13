<?php 
function check_number_range(){
    $num = (float)readline("Enter a number: ");
    if($num < 1 && $num <= 100){
        echo "The number ".$num."is in the range 1 to 1000";

    }else{
        echo "The number ".$num." is above 100";
    }
}
?>