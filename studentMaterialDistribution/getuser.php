
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect("localhost", "root", "","resource");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"studentInfo");
$sql="SELECT * FROM studentInfo WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>student Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>gender</th>
<th>department</th>
<th>email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
	echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['department'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
	
echo "	<h2 style='text-align:center'> ";
echo "<img alt='not found' src='".$row['url']."' width='200px' height='200px'/>";
echo "</h2>";

}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 