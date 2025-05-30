<!-- php program to demonstrate the variable function: isset() -->

<?php

$name = "Kavya";
$empty_var = null;

if(isset($name)) {
    echo "Name is set to $name<br>";
}

if(!isset($empty_var)) {
    echo "Var is set to $empty_var<br>";
}

?>