<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "library1";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$result = mysqli_query($conn, "SELECT * FROM violations WHERE s_id='" . $_GET['s_id'] . "'");
while($row=mysqli_fetch_assoc($result))
{

$id=$row['s_id'];
//  $query="INSERT INTO permanent_data
//  (s_id, Date, Time)
//  VALUES
//  (' 105', NOW(), NOW())";
 $query="delete from violations where s_id='$id'";
 $result= mysqli_query($conn,$query);

 header('location:warnings.php');
 header("Refresh:0");
}
 ?>