<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "e-literasi";

$connect = mysqli_connect($host,$username,$password,$database);
$sql = "select * from ulasan";
$results = mysqli_query($connect, $sql);
$json_array = array();

while($data = mysqli_fetch_assoc($results))
{
    $json_array[]= $data;
}
echo json_encode($json_array)
?>