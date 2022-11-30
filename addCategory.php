<?php


$servername = "us-cdbr-east-06.cleardb.net";
$username = "b531ac9c16a69b";
$password = "deaf8c4c";
$dbname = "heroku_4ad847d2e294279";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$category = $_POST["category"];
$query = "select * from category where category = '$category'";
$res = $conn->query($query);
if($res->num_rows>0){
  header("location:".$_SERVER['HTTP_REFERER']);
  return;
}
$query = "insert into category (category) values ('$category')";
$conn->query($query);
header("location:".$_SERVER['HTTP_REFERER']);

?>