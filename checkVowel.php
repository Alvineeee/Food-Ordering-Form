<?php
function check_vowel() {
    $char = strtolower(readline("Enter an alphabet: "));

    // Using if statement
    if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
        echo "$char is a Vowel (using if statement)\n";
    }

    // Using if-else if-else statement
    if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
        echo "$char is a Vowel (using if-else if-else statement)\n";
    } else {
        echo "$char is a Consonant\n";
    }

}
check_vowel()
?>
