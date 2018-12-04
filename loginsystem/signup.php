<?php
   include_once 'header.php'; ?>

  <h2>Signup</h2>
  <form class="" action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="last" placeholder="Lastname">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="uid" placeholder="UserID">
    <input type="text" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Signup</button>

  </form>

<?php include_once 'footer.php'; ?>
