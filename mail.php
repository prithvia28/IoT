<?php
session_start();   
include "connection.php";
?>

<?php
$result = mysqli_query($conn, "SELECT * FROM orders WHERE order_id='" . $_GET['order_id'] . "'");
$row = mysqli_fetch_array($result);
$id=$row['order_id'];

$u_id=$row['user_id'];
$type=$row['order_type'];

$conn->query("UPDATE orders SET order_status = '5' WHERE order_id = '$id'");
$result = mysqli_query($conn, $query);

    
$result1=mysqli_query($conn,"SELECT * FROM user where user_id='$u_id'");
$row1=mysqli_fetch_array($result1);
$mail=$row1['email'];

// $to="shubhamkelkar2302@gmail.com";

    $body="You have received more than 15 warnings. please pay the penalty of Rs 50!";
$header="From:manager@Home";
$subject="Library";

mail($mail,$subject,$body,$header);

    header('location:warnings.php');
    header('Refresh:2');

?>