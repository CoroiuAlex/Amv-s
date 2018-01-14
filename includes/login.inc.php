<?php
 session_start();


if (isset($_POST['submit'])) {
  include_once 'dbh.inc.php';

 $uid = mysqli_real_escape_string($conn, $_POST['uid']);
 $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Error handlers
  if (empty($uid) or empty($pwd)) {
    header ("Location: ../index.php?login=empty");
    exit();
  } else {
      $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
      $result = mysqli_query($conn, $sql);
      $reslutCheck = mysqli_num_rows($result);
      if ( $reslutCheck < 1) {
        header ("Location: ../index.php?login=error");
        exit();
      } else {
        if ($row = mysqli_fetch_assoc($result)) {
          //De-hasing the password
          $hasedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if ($hasedPwdCheck == false) {
            header ("Location: ../index.php?login=error");
            exit();
          } elseif ($hasedPwdCheck == true) {
            //Login the user here
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_first'] = $row['user_first'];
            $_SESSION['u_last'] = $row['user_last'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_uid'] = $row['user_uid'];
            header ("Location: ../index.php?login=success");
            exit();
          }
        }
      }
  }

}  else {
    header ("Location: ../index.php?login=error");
    exit();
}