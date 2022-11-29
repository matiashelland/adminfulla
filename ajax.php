<?php


$servername = "eu-cdbr-west-03.cleardb.net";
$username = "bbaf388fb9cdd4";
$password = "3d8129cb";
$dbname = "heroku_bd8d98ba372acef";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$title = $_POST['title'];
$body = $_POST['body'];
$category = $_POST['category'];
$query = "insert into article (title, body, category) values ('$title','$body','$category')";
$res = $conn->query($query);
echo $res;


?>