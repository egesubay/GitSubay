<?php
include 'MysqlConnections.php';
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$birth = $_POST['birth'];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}

else{
$usersql= "INSERT INTO user(isim, soyisim, dogumTarihi) VALUES ('$name','$surname','$birth')";
mysqli_query($conn, $usersql);

$loginsql="INSERT INTO login(username, password) VALUES ('$username','$password')";
mysqli_query($conn, $loginsql);

}

?>


