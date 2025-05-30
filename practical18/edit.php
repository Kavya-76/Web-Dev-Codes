<?php

include("db.php");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" />
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" />
        <br>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="<?php echo $row['age']; ?>" />
        <br>
        <button type="submit">Update</button>
    </form>    
</body>
</html>


?>