<!--  Write a program to enter TWO numbers and print the Swap Numbers using PHP Example.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap number</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter first number" /><br>
        <input type="number" name="num2" placeholder="Enter second number" /><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php 

if($_SERVER['REQUEST_METHOD']=='POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "Before Swapping<br>num1 = $num1<br>num2 = $num2<br><br>";
    
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
    echo "After Swapping<br>num1 = $num1<br>num2 = $num2<br><br>";
} else{
    echo "Unable to access request<br>";
}

?>