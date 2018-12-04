<?php
session_start();
 ?>
<!DOCTYPE html>
<html >
  <head>
  
    <title></title>
  </head>
  <body>
    <header>
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
      <form class="" action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username/e-mail">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Login</button>

      </form>
      <a href="signup.php">Signup</a>

      </div>
    </header>
