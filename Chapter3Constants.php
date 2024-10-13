<?php
define("EMPLOYEE_CODE", "001");
define("EMPLOYEE_NAME", "ABC");
define("EMPLOYEE_SALARY", "250000");
define("WORKING_HOURS", "7.5");


echo "Employee code is ".EMPLOYEE_CODE. "<br>";
echo "Employee name is ".EMPLOYEE_NAME. "<br>";
echo "Employee Salary is ".EMPLOYEE_SALARY. "<br>";
echo "Employee working hours are ".WORKING_HOURS ;

//  making a constant name case insensitive

define("GREETING", "Welcome", true);
echo greeting;

// Declaring a constant in PHP
define("WEBSITE", "Mywebsite");
echo WEBSITE;



?>