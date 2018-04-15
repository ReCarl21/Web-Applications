<?php

# for if people actually click the buttons
if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  # store data to variables
  $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
  $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $emailAdress = mysqli_real_escape_string($conn, $_POST['emailAddress']);
  $months = mysqli_real_escape_string($conn, $_POST['months']);
  $days = mysqli_real_escape_string($conn, $_POST['days']);
  $years = mysqli_real_escape_string($conn, $_POST['years']);
  #$confirmPass = $_POST['confirm'];

  # gender is radiobutton in form
  $gender;
  if($_POST['gender'] == 'male'){
    $gender = "Male";
  } else {
    $gender = "Female";
  }

  $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);

  # date and time
  date_default_timezone_set("America/New_York");
  $d=strtotime(date("Y-m-d h:i:sa"));
  $dateReg = date("Y/m/d");
  $timeReg = date("h:i:sa", $d);


  # error handler
  # check for empty fields
if (empty($Fname) || empty($Lname) || empty($username) || empty($password)
|| empty($emailAdress) || empty($months) || empty($days) || empty($years)
|| empty($gender) || empty($mobileNumber)) {

  header("Location: ../signup.php?signup=empty");
  exit();

} else {

  # check if characters are valid
  if (!preg_match("/^[a-zA-Z]*$/", $Fname) || !preg_match("/^[a-zA-Z]*$/", $Lname)) {
  header("Location: ../signup.php?signup=invalid");
  exit();

  } else {

  # check if email is valid
    if (!filter_var($emailAdress, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../signup.php?signup=email");
      exit();

    } else {
      $sql = "SELECT * FROM users WHERE username = 'username'";
      $result = mysqli_query($conn, $sql);
      $resultcheck = mysqli_num_rows($result);

      if ($resultcheck > 0){
        header("Location: ../signup.php?signup=usertaken");
        exit();

      } else {

        # encrypting the password and i already did that with md5 code
        # cause this one is not working
        # this is the problem
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


        # insert the user into the database
        $sql = "INSERT INTO users (username, password, email_address, first_name, last_name, gender, months, days,
        years, mobile_number, date_reg, time_reg) VALUES('".$_POST['username']."','$hashedPwd','".$_POST['emailAddress']."',
          '".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['gender']."','".$_POST['months']."',
          '".$_POST['days']."','".$_POST['years']."','".$_POST['mobileNumber']."', '$dateReg' , '$timeReg')";

          # $result = can be removed
          mysqli_query($conn, $sql);
          header("Location: ../signup.php?signup=success");
          exit();

      }

    }
  }

}



} else {
  header("Location: ../signup.php");
  exit();
}


 ?>
