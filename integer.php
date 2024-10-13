<?php 
function check_even_odd() {
    $num = (int)readline("Enter a number");
    if($num/2 ==0){
        echo " The number ".$num ."is Even";
    }else{
        echo "The number". $num. "is ODD";
    }

}
 check_even_odd()
?>