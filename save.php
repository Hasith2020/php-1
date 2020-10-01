<?php
//include('dbcon.php');
require('dbcon.php');

$player_name="";
$age="";
$country_id="";

if(isset($_POST['player_name']))
{
$player_name=$_POST["player_name"];
}
if(isset($_POST['age']))
{
$age=$_POST["age"];
}

if(isset($_POST['country_id']))
{
$country_id=$_POST["country_id"];
}

$sql="INSERT INTO player(player_name, age, country_id) VALUES ('$player_name', '$age', '$country_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>