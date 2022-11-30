<?php


$servername = "us-cdbr-east-06.cleardb.net";
$username = "b531ac9c16a69b";
$password = "deaf8c4c";
$dbname = "heroku_4ad847d2e294279";

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