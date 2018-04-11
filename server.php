<!DOCTYPE html>
<html>
<head>
  <title>Server</title>
</head>
<body>

<?php

#date and time login (session) in db
$firstN = $_POST['Fname'];
$lastN = $_POST['Lname'];
$usersName = $_POST['username'];
$passwordS = $_POST['password'];
#$confirmPass = $_POST['confirm'];
$monthS = $_POST['months'];
$dayS = $_POST['days'];
$yearS = $_POST['years'];
$gender;
if($_POST['gender'] == 'male'){
  $gender = "Male";
}else{
  $gender = "Female";
}

$contactN = $_POST['contactDetails'];

#checking if all data are set
if(isset($_POST['Fname']) && isset($_POST['Lname']) && isset($_POST['username']) &&
isset($_POST['password']) && isset($_POST['months']) && isset($_POST['days']) &&
isset($_POST['years']) && isset($_POST["gender"]) && isset($_POST['contactDetails'])){

  echo $usersName;
  echo $passwordS;
  echo $firstN;
  echo $lastN;
  echo $monthS;
  echo $dayS;
  echo $yearS;
  if($_POST['gender'] == 'male'){
    $gender = "Male";
    echo $gender;
  }else{
    $gender = "Female";
    echo $gender; }
  echo $contactN;

}else{
echo "<p>Please enter all credentials</p>";
}


$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = "itravel_db";
$conn = '';

#connect to xampp
# connect function auto call using connect()
function connect(){
  global $servername, $username, $password, $dbname, $conn;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }else{
      echo "Connection successful to MYSQL<br />";
  }
}
connect();

#id is auto generated
$sql = "INSERT INTO reg_and_log (first_name, last_name, username, password, months, days,
years, gender, mobile_number)
VALUES('".$_POST['Fname']."','".$_POST['Lname']."','".$_POST['username']."',
  '".$_POST['password']."','".$_POST['months']."','".$_POST['days']."',
  '".$_POST['years']."','".$_POST['gender']."','".$_POST['contactDetails']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();



/* USE FOR Outputting text with $values
$str = <<<EOD
EOD;
echo $str;

$str = <<<EOD

first $firstN
last $lastN
username $usersName
password $passwordS
confirm password $confirmPass
months $monthS
days $dayS
years $yearS
gender
contact details $contactN

EOD;
echo $str;

*/



?>

</body>
</html>
