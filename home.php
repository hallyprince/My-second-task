<?php
include("session.php");
//session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <p>Hello, <?php echo $_SESSION['username']; ?>!! </p>
    <p>You are now user home page.</p>
    <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>