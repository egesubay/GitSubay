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

$selectsql = "SELECT LAST_INSERT_ID() ";
$selectid = mysqli_query($conn,$selectsql);
$fetchar=mysqli_fetch_assoc($selectid);
$user_id = implode($fetchar);




$loginsql="INSERT INTO login (username,password,user_id) VALUES ('$username','$password','$user_id')";
mysqli_query($conn, $loginsql);
header("location:../Pages/Login.php");

}

?>


