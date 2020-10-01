<style>
body {
  background-image: url("123.jpg");
}

 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #85e7f2;
  color: white;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 49%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<?php
$id=$_GET['loginid'];

require('dbcon.php');
$sql="SELECT * FROM players WHERE loginid='$id'";

$result=$conn->query($sql);
$row = $result->fetch_assoc();

?>
<h3>Update/Delete</h3>
<form action="modify.php" method="POST">
<input type="hidden" name="loginid" value="<?php echo $row['loginid']?>" required>
<input type="text" name="Name" value="<?php echo $row['Name']?>" required>
<input type="text" name="Age" value="<?php echo $row['Age']?>" required>
<input type="submit" value="Edit" name="edit">
<input type="submit" value="Delete" name="delete">
</form>
