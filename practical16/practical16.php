<?php
session_start();

// Session-based counter
if (!isset($_SESSION['session_counter'])) {
    $_SESSION['session_counter'] = 1;
} else {
    $_SESSION['session_counter']++;
}

// Cookie-based counter (expires in 7 days)
if (!isset($_COOKIE['cookie_counter'])) {
    $cookie_counter = 1;
} else {
    $cookie_counter = $_COOKIE['cookie_counter'] + 1;
}
setcookie("cookie_counter", $cookie_counter, time() + (7 * 24 * 60 * 60)); // 7-day expiry

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies & Session Counter</title>
</head>
<body>
    <h2>Cookies & Session Counter Example</h2>
    
    <p>Session Counter: <?php echo $_SESSION['session_counter']; ?></p>
    <p>Cookie Counter: <?php echo isset($_COOKIE['cookie_counter']) ? $_COOKIE['cookie_counter'] : 1; ?></p>
    
    <p>Refresh the page to see the counters increment!</p>
</body>
</html>