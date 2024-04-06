<?php

@include 'dbconnect.php';

session_start();

if(isset($_POST['submit'])){
//    $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users_details WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
        mysqli_query($conn, $insert);

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'user'){
        mysqli_query($conn, $insert);

         $_SESSION['user_name'] = $row['name'];
         header('location:user.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sign-container">
        <div class="header">
        <h2>LOGIN</h2>
    </div>
    <form action="" class="form" method="post" id="form">
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
        <div class="form-control">
            <label>Email</label>
            <input type="text" placeholder="enter your email" id="username" name="email" required>
            <i class="fa fa-fw fa-check-circle" style="color: #000;"></i>


            <small>Error message</small>
        </div>

        <!-- <div class="form-control">
            <label>Email</label>
            <input type="email" placeholder="jay@gmail.com" id="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>

            <small>Error message</small>
        </div> -->

       


        <div class="form-control">
            <label>Password</label>
            <input type="password" placeholder="password" id="password2" name="password" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>

            <small>Error message</small>
        </div>
        <div class="sign-in" id="sign-in">
            <p>I don't have an account <a href="index.php">Sign-Up</a></p>
        </div>
<button class="form-button submit"  type="submit" name="submit" value="Submit"  >Sign in</button>
    </form>
    </div>
</body>
<script src="scriptaa.JS"></script>
</html>