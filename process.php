<?php
// Using POST method
echo "G.R No (POST): " . $_POST['gr_no'] . "<br>";
echo "Course Name (POST): " . $_POST['course'] . "<br>";

// Using GET method (example usage in a URL: process.php?gr_no=123&course=PHP)
echo "G.R No (GET): " . $_GET['gr_no'] . "<br>";
echo "Course Name (GET): " . $_GET['course'];
?>
