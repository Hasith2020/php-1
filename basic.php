<?php
$user="";

$pass="";

if(isset($_POST['user']))
{
	$user=$_POST["user"];
}
if(isset($_POST['pass']))
{
	$pass=$_POST["pass"];
}


echo $user."<br>". $pass;



//print_r($_POST);
?>