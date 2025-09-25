<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wordpress";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_POST){
$start = ($_POST["action"]-1)*5;
$sql = "SELECT * FROM wp_news LIMIT $start , 5";
$result = $conn->query($sql);
$temp = [];
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["title"];
    array_push($temp,$row);
  } 
} else {
  echo "0 results";
}
echo  json_encode($temp);
}


$conn->close();
?>