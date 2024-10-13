
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days Lived Claculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="age"> Enter your age:</label> <br> <br>
        <input type="number"  name="age" id="age" required> <br> <br>
        <input type="submit" value="CALCULATE">

    </form>

    <?php
    // Get the age from the form input
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = intval(($_POST['age']));

        // calculate the number of days lived 
        $number_of_days = $age * 365; 

        // Estimate the number of leap years
         $leap_years = floor($age / 4);
        

        //  adjust the total number of days lived for leap years
        $total_days_lived = $number_of_days + $leap_years;

        // display the results
        echo "<h2>You have lived for approximately $total_days_lived .</h2>";
    }

    ?>
    
</body>
</html>
