<?php


$servername = "eu-cdbr-west-03.cleardb.net";
$username = "bbaf388fb9cdd4";
$password = "3d8129cb";
$dbname = "heroku_bd8d98ba372acef";

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