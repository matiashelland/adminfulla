<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "article";

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