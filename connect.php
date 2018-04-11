<?php

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


$sql = "SELECT * FROM reg_and_log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_number"]. " - Username: " . $row["username"]. " - Password " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>
