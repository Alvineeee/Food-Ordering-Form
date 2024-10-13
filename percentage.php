<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Percentage Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="subject 1">Enter marks for Subject 1:</label> <br>
        <input type="number" name="subject1" id="subject1"  max="100"required > <br> <br>
        <label for="subject 1">Enter marks for Subject 2:</label> <br>
        <input type="number" name="subject2" id="subject2"  max="100"required > <br> <br>
        <label for="subject 1">Enter marks for Subject 3:</label> <br>
        <input type="number" name="subject3" id="subject3"  max="100"required > <br> <br
        <label for="subject 1">Enter marks for Subject 4:</label> <br>
        <input type="number" name="subject4" id="subject4"  max="100"required > <br> <br>
        <input type="submit" value="Calculate Percentage">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Get the marks from the form
        $subject1 =($_POST['subject1']);
        $subject2 = ($_POST['subject2']);
        $subject3 = ($_POST['subject3']);
        $subject4 = ($_POST['subject4']);

        // calculate the percentage

        $total_marks = 400;
        $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;
        $percentage = ($obtained_marks/ $total_marks ) * 100 ; 

        // Display the results
        echo "<h2> Obtained Marks : $obtained_marks </h2>";
        echo "<h2>Percentage: ".number_format($percentage, 2). "%</h2>";



    }
    ?>
    
</body>
</html>