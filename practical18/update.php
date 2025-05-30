<?php 

include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $conn->query("UPDATE students SET name='$name', email='$email', age='$age' WHERE id='$id'");
    header("location: index.php");
} else {
    echo "Unable to fetch details<br>";
}
?>