<?php

if (isset($_POST['submit'])) {
  include_once 'dbh.inc.php';
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //error
  //empty fields

  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
  {
    header("Location: ../sign.php?signup=empty");
    exit();
  }
  else {
    $sql = "INSERT into users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('$first', '$last', '$email', '$uid', '$pwd') ";
    mysqli_query($conn, $sql);
    header("Location: ../sign.php?signup=Success");
    exit();
  }
} else {
  header("Location: ../sign.php");
  exit();
}
