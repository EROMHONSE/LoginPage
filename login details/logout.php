<?php

@include 'dbconnect.php';

session_start();
session_unset();
session_destroy();

header('location:signIn.php');

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Silly
</body>
</html> -->