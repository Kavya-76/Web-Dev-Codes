<!-- Program to write into a file -->

<?php

$filename = "../../files/file1.txt";
$content = "This is file1.\nContent is written using php";
$file = fopen($filename, "w");

if($file) {
    fwrite($file, $content);
    fclose($file);
    echo "File written successfully<br>";
} else {
    echo "Unable to write file<br>";
}

?>