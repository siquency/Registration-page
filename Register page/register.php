<?php
   session_start();
   if($_SESSION['user']){
      header('Location: profile.php');
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Login and registration</title>
   <link rel="stylesheet" href="assets/css/main.css">
  
      
</head>

<body>
   <form name="signupForm" action="vendor/signup.php" method="post" enctype="multipart/form-data">
      <label>Name</label>
      <input type="text" name="full_name" placeholder="Enter your name and surname">
      <label>Login</label>
      <input type="text" name="login" placeholder="Enter your login">
      <label>Email</label>
      <input type="text" name="email" placeholder="Enter your Email">
      <label>Account Photo</label>
      <input type="file" name="avatar">

      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password">
      <label>Confirm password</label>
      <input type="password" name="password_confirm" placeholder="Confirm password">
      
      <button type="submit">Submit</button>
      <p>
         Already have account? <a href="/regPage(PHP)/index.php">Login</a>
      </p>
      <?php
         if($_SESSION['message']){
             echo '<p class="msg">'. $_SESSION['message']. '</p>';
         }
         unset($_SESSION['message']);
      ?>
     
   </form>
</body>

</html>