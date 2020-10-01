<?php
include('dbcon.php');
//require('dbcon.php');

$Name="";
$Age="";
$Country_id="";

if(isset($_POST['Name']))
{
	$Name=$_POST["Name"];
}
	

if(isset($_POST['Age']))
{
	$Age=$_POST["Age"];
}


$sql="INSERT INTO players(Name, Age, Country_id) VALUES ('$Name', '$Age', '$Country_id')";

if(isset($_POST['Country_id']))
{
	$Country_id=$_POST["Country_id"];
}



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('location:view.php')

?>