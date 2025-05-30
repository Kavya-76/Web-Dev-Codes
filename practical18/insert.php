<?php

include "db.php";
if($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $conn->query("INSERT INTO students(name,email,age) VALUES('$name','$email','$age')");
    header("location: index.php");
} else {
    echo "Unable to get data<br>";
}
?>