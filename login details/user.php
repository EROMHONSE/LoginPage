<?php

@include 'dbconnect.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:signIn.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
      <link rel="stylesheet" href="stysless.css">
</head>
<body>
  <div class="main-admin">
<div class="admin_cont">
<h2>Users</h2>
<p>This is Users page</p>
<div class="admin-log">
<a href="index.php" class="ceate">Create Account</a>
<a href="signIn.php" class="signin">Sign In</a>
<a href="Logout.php" class="logout">Logout</a>
</div>
</div>


</div>


</body>
    </html>
