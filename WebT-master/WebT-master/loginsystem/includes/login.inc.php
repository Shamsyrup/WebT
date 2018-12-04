<?php

  if (isset($_POST['submit'])) {
    include 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../index.php?login=error");
      exit();
      // code...
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        $PwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($PwdCheck == false) {
          header("Location: ../index.php?login=pwerror");
          exit();

          // code...
        }elseif ($PwdCheck == true) {
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_uid'] = $row['user_uid'];
          header("Location: ../index.php?login=success");
          exit();
        }

      }
    }
  }


 ?>
