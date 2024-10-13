<?php
function Grading(){
    $math = (float)readline("Enter Marks for MAths:");
    $Eng = (float)readline("Enter Marks for English:");
    $Phy = (float)readline("Enter Marks for Physics:");

    $total_marks = $math + $Eng + $Phy;
    $percentage  = ($total_marks / 300) * 100;
    if($percentage >= 90){
        $grade = 'A';
    } elseif ($percentage >= 75) {
        $grade = 'B';
    } elseif ($percentage >= 50) {
        $grade = 'C';
    } else {
        $grade = 'D';
    }

    echo "Total Marks: $total_marks\n";
    echo "Percentage: $percentage%\n";
    echo "Grade: $grade\n";
}
Grading()
?>