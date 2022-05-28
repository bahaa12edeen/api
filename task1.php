<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "api";
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);

$query = "SELECT * FROM `employees`;";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result)){
    $api[]=$row;
}

echo json_encode($api);

exit;
?>