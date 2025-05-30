<!-- php program to read fron an existing file -->

<?php

$filename = "../../files/file1.txt";
$file = fopen($filename, "r");

if($file) {
    $content = fread($file, filesize($filename));
    echo "<h3>File content</h3>".$content."<br>";
} else {
    echo "Unable to read file<br>";
}

?>