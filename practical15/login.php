<?php

session_start();
include("db.php");

if(isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST") { 
    $username = $_POST['username'];
    echo $username;
    // $password = $_POST['password'];

    $query = $conn->prepare("SELECT password from Users WHERE username=?");
    $query->bind_param("s", $username);
    $query->execute();
    $query->store_result();

    if($query->num_rows>0) {
        $query->bind_result($password);
        $query->fetch();

        if($password === $_POST['password']) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('Username not found!'); window.location='login.html';</script>";
    }

    $query->close();
    $conn->close();
}



?>