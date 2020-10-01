<?php
$server="127.0.0.1";

$username="root";

$password="";

$db="football";

$conn=new mysqli($server,$username,$password,$db);





if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>