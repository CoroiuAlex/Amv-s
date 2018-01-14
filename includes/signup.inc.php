<?php

  if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';


    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handlers
    //Check for empty fields
    if (empty($first) or empty($last) or empty($email) or empty($uid) or empty($pwd)) {
      header("Location: ../Signup.php?signup=empty");
      exit();
    } else {
      //Check if input charaters are valid
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../Signup.php?signup=invalid&email=$email&uid=$uid");
        exit();
      } else {
        //Check if email is valid
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../Signup.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
          } else {
              $sql = "SELECT * FROM users WHERE user_uid='$uid'";
              $result = mysqli_query($conn, $sql);
              $reslutCheck = mysqli_num_rows($result);

              if ($reslutCheck > 0) {
                header("Location: ../Signup.php?signup=usertaken");
                exit();
              } else {
                //Hasing the password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //Insert the user into the database
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd ) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd' );";
                mysqli_query($conn ,$sql);
                header("Location: ../Signup.php?signup=success");
                exit();
              }
          }
        }
      }
    }
    else {
      header("Location: ../Signup.php");
      exit();
         }
