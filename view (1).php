<style>
#bla {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#bla td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#bla tr:nth-child(even){background-color: #f2f2f2;}

#bla tr:hover {background-color: #ddd;}

#bla th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<?php
require('dbcon.php');

$sql="SELECT * FROM players";

?>

<table id="bla">
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Edit</th>
</tr>



<?php
$result=$conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
	<tr>
	<td><?php echo $row['loginid'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Age'];?></td>
	<td><a href="mod.php?loginid=<?php echo $row ['loginid'];?>">Edit</a><td>
	</tr>
<?PHP
  }
} else {
  echo "0 results";
}
$conn->close();

?>