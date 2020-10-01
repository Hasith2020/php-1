<?php
include('dbcon.php');
//require('dbcon.php');

$Name="";
$Age="";
$country_id="";

if(isset($_POST['Name']))
{
	$Name=$_POST["Name"];
}
	

if(isset($_POST['Age']))
{
	$Name=$_POST["Age"];
}

$sql="INSERT INTO players(Name, Age, country_id) VALUES ('$Name', '$Age', '$country_id')";

if(isset($_POST['country_id']))
{
	$Name=$_POST["country_id"];
}



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>