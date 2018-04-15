<?php

session_start();

if (isset($_POST['submit'])) {

  include 'dbh.inc.php';

  # store data to variables
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  date_default_timezone_set("America/New_York");
  $d=strtotime(date("Y-m-d h:i:sa"));
  $dateLogin = date("Y/m/d");
  $dateLogout = date("h:i:sa", $d);
  #

  # error handler
  # checks if inputs are empty
  if (empty($username) || empty($password)) {
    header("Location: ../index.php?login=empty");
    exit();
  } else {

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck < 1) {
      header("Location: ../index.php?login=error");
      exit();
    } else {
        if ($row = mysqli_fetch_assoc($result)) {

          # not working because of hash
          # de-hashing the code back to normal
          # i decided to remove the md5 for now

          $hashedPwdCheck = password_verify($password, $row['password']);
          if ($hashedPwdCheck == false) {

            header("Location: ../index.php?login=error");
            exit();

          } elseif($hashedPwdCheck == true) {

            # logs in the user here
            $_SESSION['u_id'] = $row['id_number'];
            $_SESSION['u_user'] = $row['username'];
            $_SESSION['u_email'] = $row['email'];
            $_SESSION['u_first'] = $row['first_name'];
            $_SESSION['u_first'] = $row['last_name'];
            $_SESSION['u_gender'] = $row['gender'];
            $_SESSION['u_months'] = $row['months'];
            $_SESSION['u_days'] = $row['days'];
            $_SESSION['u_years'] = $row['years'];
            $_SESSION['u_mobile'] = $row['mobile'];
            header("Location: ../index.php?login=success");
            exit();


          }

        }
    }
  }


    # update login date or time
    # $sql = "UPDATE users SET date_Login = '$dateLogin' where username= '$username'
    # AND password = '$password'";

} else {
  header("Location: ../index.php?login=error");
  exit();
}
?>
