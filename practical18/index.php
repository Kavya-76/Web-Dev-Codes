<?php 
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="insert.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter name" />
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter email" />
        <br>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" placeholder="Enter age" />
        <br>
        <button type="submit">Submit</button>
    </form>
    <hr>
    <h2>Students List</h2>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        <?php

        $result = $conn->query("SELECT * FROM students");
        foreach($result as $row) {
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['age']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a> 
            </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>