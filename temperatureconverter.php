<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Convert Centigrade to Fahrenheit</h1>
    <form action="" method="post">
        <label for="centigrade">Enter temperature in Centigrade: </label>
        <input type="number" name="centigrade" id="centigrade" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the temperature in Centigrade from the form input
        $centigrade = floatval($_POST['centigrade']);
        
        // Convert to Fahrenheit
        $fahrenheit = ($centigrade * 9/5) + 32;

        // Display the result
        echo "<h2>$centigrade °C is equal to $fahrenheit °F.</h2>";
    }
    ?>
</body>
</html>
