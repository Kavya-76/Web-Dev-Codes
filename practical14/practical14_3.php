<?php
$name = "Kavya";

echo "Before unset: " . $name . "<br>";

unset($name);

if (isset($name)) {
    echo "After unset: " . $name . "<br>";
} else {
    echo "Variable has been unset and no longer exists.";
}
?>