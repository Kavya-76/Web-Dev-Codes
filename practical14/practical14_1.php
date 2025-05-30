<!-- Form Handling in PHP: Write a PHP Program to demonstrate the variable function: gettype() and settype().  -->

<?php

$var = 10;
echo "Original type of var = ".gettype($var)."<br>";

settype($var, "string");
echo "Changed type to string = ".gettype($var)."<br>";

settype($var, "float");
echo "Changed type to float = ".gettype($var)."<br>";
?>