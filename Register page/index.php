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
   <form action="vendor/signin.php" method="post">
      <label>Login</label>
      <input type="text" name="login" placeholder="Enter your login">
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your password">
      <button type="submit">Submit</button>
      <p>
         You have not account? - <a href="/regPage(PHP)/register.php">Register</a>!
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