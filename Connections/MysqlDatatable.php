<?php
include 'MysqlConnections.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
  
  else{
    $datatablesql = "SELECT  username, password, CONCAT(isim,' ',soyisim) as isimler,dogumTarihi FROM login inner join user on login.user_id= user.id";
$datatable = mysqli_query($conn,$datatablesql);


  }