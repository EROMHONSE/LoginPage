
<?php

@include "dbconnect.php";

if (isset($_POST['submit'])){


  $name = mysqli_real_escape_string($conn, strip_tags($_POST['name']));
  $email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = mysqli_real_escape_string($conn, strip_tags($_POST['user_type']));

  $select = " SELECT * FROM users_details  WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users_details (name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:signIn.php');
      }
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
      <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <header class="show" id="header">
        <nav class="nav bd-grid">
          <div>
            <a href="#" class="nav_logo">IGHODALO E. JACOB</a>
          </div>
          <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">
              <li class="nav_item">
                <a href="#home" class="nav_link active">Home</a>
              </li>
              <li class="nav_item">
                <a href="#about" class="nav_link">About</a>
              </li>
              <li class="nav_item">
                <a href="#skills" class="nav_link">Skills</a>
              </li>
              <li class="nav_item">
                <a href="#portfolio" class="nav_link">Portfolio</a>
              </li>
              <li class="nav_item">
                <a href="contact.html" class="nav_link">Contact</a>
              </li>
            </ul>
          </div>
          <div class="nav_toggle" id="nav-toggle">
            <i class="bx bx-menu">gg</i>
          </div>
        </nav>
      </header> -->

      <!-- <div class="click" id="click">
          <p style="cursor: pointer;"></p>
      </div> -->
    <div class="container" id="container">
        <div class="header">
        <h2>Create Acount</h2>
    </div>
    <form action="" method="post" class="form" id="form">
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> 
        <div class="form-control">
            <label>Username</label>
            <input type="text" placeholder="Jacob123" id="username" name="name" required>
            <i class="fa fa-fw fa-check-circle"></i> 
            <i class="fa fa-fw fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="form-control">
      
            <label>Email</label>
            <input type="email" placeholder="jay@gmail.com" id="email" name="email" required>
            <i class="fa fa-fw fa-check-circle"></i> 
            <i class="fa fa-fw fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label>Password</label>
            <input type="password" placeholder="password" id="password" name="password" required>
            <i class="fa fa-fw fa-exclamation-circle"></i>
            <i class="fa fa-fw fa-check-circle"></i>
            <small>Error message</small>
        </div>

        <div class="form-control">
            <label>Password check</label>
            <input type="password" placeholder="confirm password" id="password2" name="cpassword" required>
            <i class="fa fa-fw fa-check-circle"></i>
            <i class="fa fa-fw fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
        <div class="form-control">
        <label>Select Option </label>
        <select name="user_type" class="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
        </div>
        <div class="sign-in" id="sign-in">
            <p>Already have an account? <a href="signIn.php">Sign-in</a></p>
        </div>
<button class="submit" id="submit" type="submit" name="submit" value="Submit" >Submit</button>
      </form>
    </div>
   
</body>
<script src="scripta.JS"></script>

</html>