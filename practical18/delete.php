<?php 

include("db.php");

if($_SERVER['REQUEST_METHOD']=="GET") {
    $id = $_GET['id'];
    $conn->query("DELETE FROM students WHERE id=$id");
    header("location: index.php");
} else {
    echo "Unable to get request<br>";
}

?>